<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="author" content="Fredrik Leemann" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="robots" content="index, follow, noodp, noydir" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/10up-sanitize.css/8.0.0/sanitize.css" type="text/css" />
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
  <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="assets/styles/custom.css" type="text/css" />
  <!-- <link rel="stylesheet" href="/assets/styles/tablet.css" type="text/css" />
    <link rel="stylesheet" href="/assets/styles/desktop.css" type="text/css" /> -->
  <meta name="description" content="Christmas project 2018 Photoify" />
  <meta name="keywords" content="Photoify, Project, School, Login, database, PHP" />
  <title>Photoify Bootstrap</title>
</head>

<body>

  <header class="position-relative">
    <nav class="navbar main navbar-light bg-light my-orange-color">
      <div class="container">
        <a class="navbar-brand font-weight-bold" href="/">Photoify</a>

        <i class="navbar font-weight-bold d-none d-lg-block fa fa-sign-out" aria-hidden="true">
          <a class="pl-2 text-dark" href="#">Logout</a>
        </i>

        <div class="mobile-menu d-flex d-lg-none">
          <div class="hamburger-menu"></div>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <!-- Start main container -->
    <div class="container">
      <!-- Start main row -->
      <div class="row text-center my-4">

        <!-- Start column 1 -->
        <!-- Margin bottom 0 (mb-0) on mobile -->
        <div id="first-column" class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-0 mb-lg-3">

          <div class="my-radius-none alert alert-secondary m-0 d-flex align-items-center justify-content-center">
            <strong>Messages will appear here</strong>
          </div>

          <!-- Start section 1 user-info wrapper -->
          <!-- Toggle class="display-none" on mobile -->
          <div id="wrapper-first-column" class="d-none d-lg-block">
            <!-- Start section 1 in column 1 -->
            <section class="position-relative">
              <div class="container m-0 py-4 my-orange-color">
                <div class="col-4 mx-auto">
                  <img src="assets/images/profiles/profile_129.gif" class="img-thumbnail img-fluid" alt="Profile picture">
                </div>
              </div>
              <!-- Add class to show: overlay-display -->

              <!-- Start section 1 for overlay 1 in column 1 -->
              <section id="edit-toggle-overlay" class="position-absolute mb-4 display-none">
                <!-- Start container for column 2 section 1 -->
                <div class="container m-0 p-0 border">
                  <!-- Start jumbotron for form -->
                  <div class="jumbotron jumbotron-fluid py-3 m-0">
                    <!-- Start container for form -->
                    <div class="container">
                      <!-- Start container for profile image -->
                      <div class="container m-0 py-4 my-orange-color mb-3 position-relative">
                        <div class="col-4 mx-auto">
                          <img src="assets/images/profiles/profile_129.gif" class="img-thumbnail img-fluid" alt="Profile picture">
                        </div>
                      </div><!-- Start container for profile image -->
                      <h4>Edit Account</h4>
                      <form action="app/users/something.php" method="post">
                        <div class="form-group">
                          <label for="profile_pic" class="float-left">Upload Avatar</label>
                          <input id="profile_pic" class="form-control-file" name="profile_pic" type="file" accept=".jpg, .jpeg, .gif, .png" />
                          <small class="form-text text-muted text-left">Accepted filetypes: .jpg .jpeg .png .gif Maxfilesize: 2MB</small>
                        </div>

                        <div class="form-group">
                          <label for="profile_bio" class="float-left">Update biography</label>
                          <textarea id="profile_bio" class="form-control" name="profile_bio" maxlength="101"></textarea>
                        </div>

                        <div class="form-group">
                          <label for="email" class="float-left">Update email</label>
                          <input id="email" class="form-control" name="email" type="email" value="fredrik@leemann.se" required />
                        </div>

                        <div class="form-group">
                          <label for="fullname" class="float-left">Update fullname</label>
                          <input id="fullname" class="form-control" name="fullname" type="text" value="Fredrik Leemann" />
                        </div>

                        <div class="form-group">
                          <label for="timezone" class="float-left">Timezone</label>
                          <select id="timezone" class="form-control" name="timezone">
                            <option value="Europe/Stockholm" selected>Europe/Stockholm</option>
                            <option value="Europe/London">Europe/London</option>
                            <option value="America/New_York">America/NewYork</option>
                            <option value="Asia/Dubai">Asia/Dubai</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="opassword" class="float-left">Update password</label>
                          <input id="opassword" class="form-control" name="cpassword" type="password" placeholder="Current password" />
                        </div>
                        <div class="form-group">
                          <input id="npassword" class="form-control" name="npassword" type="password" placeholder="Set a new password" />
                        </div>
                        <div class="form-group">
                          <input id="rpassword" class="form-control" name="rpassword" type="password" placeholder="Repeat new password" />
                        </div>

                        <button type="submit" class="btn btn-success my-2"><i class="fa fa-floppy-o pr-1" aria-hidden="true"></i>Save Changes</button>
                        <button type="button" class="btn btn-dark my-2" id="edit-close-overlay-btn"><i class="fa fa-times-circle-o pr-1" aria-hidden="true"></i>Close Window</button>
                      </form>
                    </div>
                  </div>
                </div>

                <div class="jumbotron bg-warning warning-delete-account m-0">
                  <h1 class="display-5 pb-4">DangerZone</h1>
                  <p class="lead">By clicking the button below your account will get deleted together with all content such as posts, files and personal information</p>
                  <hr class="my-4" />

                  <button type="submit" class="btn btn-danger mt-2 mb-3"><i class="fa fa-trash-o pr-1" aria-hidden="true"></i>Delete Account</button>
                </div>

                <!-- End section 1 for overlay 1 in column 1 -->
              </section>
              <!-- End section 1 in column 1 -->
            </section>

            <!-- Start section 2 in column 1 -->
            <section class="account-info" style="height: 260px;">
              <div class="container m-0 p-0 bg-white border-right border-left h-100 d-block text-left p-3">

                <button id="edit-account" type="button" class="edit-account-btn btn btn-info mt-2 mb-3">
                  <i class="fa fa-user-circle-o pr-1" aria-hidden="true"></i>Account</button>

                <i class="font-weight-bold bg-light p-1 border d-inline-block d-lg-none fa fa-sign-out float-right" aria-hidden="true">
                  <a class="text-dark" href="#">Logout</a>
                </i>

                <br />
                <dt>Welcome Fredrik Leemann</dt>
                <hr />
                <p class="lead mb-1">Biography:</p>
                <small>Hej på dig!</small>
              </div>
            </section>
            <!-- End section 2 for column 1 -->

            <!-- Start section 3 for column 1 -->
            <section class="account-info">
              <div class="container m-0 p-0">
                <ul class="list-group">
                  <li class="list-group-item text-left">Username:</li>
                  <li class="list-group-item text-left">TimeZone:</li>
                  <li class="list-group-item text-left">Account Created:</li>
                </ul>
              </div>
            </section>
            <!-- End section 3 for column 1 -->

          </div><!-- End section 1 user-info wrapper -->
        </div><!-- End column 1 -->

        <!-- Start column 2 -->
        <!-- Toggle class: d-none when overlay is open -->
        <div id="second-column" class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
          <!-- Start section 1 for column 2 -->
          <!-- <section class="sticky-top"> -->
          <section>
            <!-- Start container for column 2 section 1 -->
            <div class="my-post-module container m-0 p-0 border-right border-left border-top">
              <!-- Start jumbotron for form -->
              <div class="jumbotron jumbotron-fluid py-3 m-0">
                <!-- Start container for form -->
                <div class="container">
                  <h4>Create a new post</h4>
                  <form action="app/users/something.php" method="post">
                    <div class="form-group">
                      <label for="postfile" class="float-left">Upload image</label>
                      <input id="postfile" class="form-control-file" name="postfile" type="file" />
                      <small class="form-text text-muted text-left">Accepted filetypes: .jpg .jpeg .png .gif Maxfilesize: 2MB</small>
                    </div>
                    <div class="form-group">
                      <label for="postdesc" class="float-left">Add description</label>
                      <textarea id="postdesc" class="form-control" name="postdesc" maxlength="101"></textarea>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-arrow-circle-o-down pr-1" aria-hidden="true"></i>Post to timeline</button>
                  </form>
                </div><!-- End container for form -->
              </div><!-- End jumbotron for form -->
            </div><!-- End container for column 2 section 1 -->
          </section><!-- End section 1 for column 2 -->

          <article class="mt-3">
            <div class="card" style="width: 100%;">
              <div class="card-header d-flex justify-content-between align-items-center px-2" style="height: 50px;">
                <img src="assets/images/profiles/profile_129.gif" class="img-thumbnail" alt="Profile picture" style="height: auto; max-width: 40px; display: block;">
                <small>Posted: yyyy-mm-dd hh-mm-ss</small>
              </div>

              <div class="card-body p-0">
                <img class="card-img-top img-fluid" src="assets/images/profile_1-post_1.jpg" alt="Card image cap" />
                  <p class="card-text text-left bg-light py-2 px-4 m-0">
                    <small>Some quick example text to build on the card title and make up the bulk of the card's content.</small>
                  </p>
                <!-- <div class="form-group m-0">
                  <textarea class="form-control post-desc" readonly name="postdesc" style="border-radius: 0px; border: 0;" maxlength="101">Some quick example text to build on the card title and make up the bulk of the card's content.</textarea>
                </div> -->
              </div>

              <div class="card-footer d-flex justify-content-between align-items-center px-2">

                <button type="button" id="like-btn-1" class="p-1 border-0 bg-light btn">
                  <i class="fa fa-heart" aria-hidden="true"><small class="pl-1">Like</small></i>
                </button>

                <!-- <button type="button" id="like-btn-2" class="p-1 border-0 bg-light btn">
                  <i class="fa fa-thumbs-up" aria-hidden="true"><small class="pl-1">Like</small></i>
                </button>

                <button type="button" id="dislike-btn" class="p-1 border-0 bg-light btn">
                  <i class="fa fa-thumbs-down" aria-hidden="true"><small class="pl-1">Dislike</small></i>
                </button> -->

                <div>
                  <button id="edit-post" type="button" class="btn-small btn-info"><i class="fa fa-pencil-square-o pr-1" aria-hidden="true"></i>Edit</button>
                  <button id="delete-post" type="button" class="btn-small btn-danger disabled"><i class="fa fa-trash-o pr-1" aria-hidden="true"></i>Delete</button>
                </div>
              </div>
            </div>
          </article>
        </div><!-- End column 2 -->
      </div><!-- End main row -->
    </div><!-- End main container -->
  </main>

  <footer>

  </footer>
  <script src="/assets/scripts/main.js"></script>
</body>
</html>