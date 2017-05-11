<?php

class Controller_Authenticate extends Controller_Base {

  public function action_login() {
    if (!is_null(Session::get('login'))) {
      return Response::redirect("/");
    }
    $data = array(
      /* For username, we want to pass it down from here
       * rather than retrieve it as a flash variable in
       * the Smarty template.
       * 
       * The reason is that username needs to be "escaped"
       */
      'username' => Session::get_flash('username'),
    );
    return View::forge("authenticate/login.tpl", $data);
  }

  public function action_validate() {
    $username = Input::post('username');
    $password = Input::post('password');
    $trim_username = trim($username);
    
    $user = Model_User::find('first', [
        'where'=> [ "name" => $trim_username ],
    ]);
    if (is_null($user)) {
      Session::set_flash('username', $trim_username);
      Session::set_flash('message', 'invalid user');
      return Response::redirect('/authenticate/login');
    }
    elseif (hash('sha256', $password) === $user->password) {
      $login = (object) [
         'id' => $user->id,
         'name' => $user->name,
         'is_admin' => $user->is_admin,
      ];
      Session::set('login', $login);
      return Response::redirect('/');      
    }
    else {
      Session::set_flash('username', $username);
      Session::set_flash('message', 'invalid password');
      return Response::redirect('/authenticate/login');
    }
  }

  public function action_logout() {
    Session::delete('login');
    return Response::redirect('/');      
  }
  
  public function action_noaccess() {
    return View::forge("authenticate/noAccess.tpl");
  }
  
  public function action_createLogin()
  {
      $validator = Validation::forge();
      
      $data = [
          
      ];
      $view =View::forge("authenticate/createLogin.tpl", $data);
      $view->set_safe('validator', $validator);
      return $view;
  }
  
  public function action_createLoginReentrant()
  {
      $cancel = Input::post('cancel');
      if (!is_null($cancel))
      {
          return Response::redirect("/");
      }
      
      $validator = Validators::createLoginValidator();
      
      $message = "";
      try
      {
          $validated = $validator->run(Input::post());
          if (!$validated) 
          {
              throw new Exception();
          }
          $validData = $validator->validated();
          
          $user = Model_User::forge();
          $password = Input::post('password');
          $user->name = Input::post('name');
          $user->email = Input::post('email');
          $user->password = hash('sha256', $password);
          $user->save();
          
          return Response::redirect("/authenticate/login");
      } catch (Exception $ex) {
          $message = $ex->getMessage();
      }
      
      $data = [
          'name' => Input::post('name'),
          'email' => Input::post('email'),
          'password' => Input::post('password'),
          'message' => $message,
      ];
      
      $view = View::forge("authenticate/createLogin.tpl", $data);
      $view->set_safe('validator', $validator);
      return $view;
  }
}
