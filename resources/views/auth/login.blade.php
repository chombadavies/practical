<!DOCTYPE html>
                      <html lang="en">

                      <head>
                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width, initial-sclae=1.0">
                      <title>Practical Admin Login</title>
                      <link rel="stylesheet" href="{{asset('backend/dist/css/style.css')}}">
                  
                      </head>

                      <body>
                        <section>
                            <br><br>
                          <div class="imgBx" style="margin-top: 4%">
                            
                            <img src="{{asset('frontend/img/mm.jpeg')}}" alt=" Logo" height: 380px  width="80%" style="margin-left: 10% !important">
                            
                          </div>
                         
                          <div class="contentBx" style="width: 80%">
                              <div class="formBx ">
                                <h1>Practical quiz Admin Portal</h1>
                                <div class="col-4">
                                  @if (Session::has('error_message'))
                                  <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: 10px">
                                {{Session::get('error_message')}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  @endif
                                </div>
                             <br>
                              <h2>Login</h2>

                      <form  action="{{route('admin.login') }}" method="POST">@csrf
                      <div class="inputBx">
                      <span>User Name</span>
                      <input type="email" name="email" type="email" class="form-control" placeholder="Email">
                      </div>
                      <div class="inputBx">
                        <span>Password</span>
                        <input type="password" name="password" id="password" placeholder="Password">
                        </div>
                        <div class="remember">
                          <label for="remember"> <input type="checkbox" name="">Remember Me</label>
                        </div>
                        <div class="inputBx">
                          <input type="submit" name="" value="Sign In">
                          </div>
                      </form>                     
                            </div>

                          </div>
                        </section>
</body>
                            </html>

