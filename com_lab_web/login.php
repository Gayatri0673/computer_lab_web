<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
</head>

<body style=" background-image: linear-gradient(to top, purple, blue, lightblue);">

    <div class="container d-flex flex-column align-items-center justify-content-center" style="height: 100vh;">

        <h2 class="text-center mb-3 text-white">Create User</h2>

        <div class="parent border-3 rounded shadow p-5 bg-white" style="width: 663px;">
            <div class="row">
                <div class="col-lg-6">
                    <!-- admin input -->
                    <label for="text">Name :-</label>
                    <input type="text" name="Name" id="Name" placeholder="Name of user" class="rounded p-2 ms-lg-2" /><br>

                    <!-- branch input -->
                    <label for="text">Branch :-</label>
                    <input type="text" id="Branch" name="Branch" placeholder="Enter Branch" class="mt-3 rounded p-2 ms-lg-1" /><br>

                   
                    <div class="dropdown">
                        <label for="text">Post :-</label>
                        <select class="ms-5 mt-3 pt-3 rounded-1 ms-lg-4" name="post" style="width: 193px;">
                            <option>Select post</option>
                            <option value="First-Year">HOD</option>
                            <option value="Second-Year">Lab Assistant</option>
                            <option value="Third-Year"></option>
                        </select>
                    </div>

                    <!-- lab inpute -->
                    <label for="text">Lab :-</label>
                    <input type="text" id="Lab" placeholder="Enter Lab" class="mt-3 rounded p-2 ms-lg-4" /><br>
                </div>
                <div class="col-lg-6">
                    <div class="inner-div ms-lg-5">
                        <!-- user name inpute -->
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="text">User Name :-</label>
                            </div>
                            <div class="col-lg-12">
                                <input type="text" name="Uname" id="Uname" placeholder="Enter User Name " class="mt-3 rounded p-2" /><br>
                            </div>
                        </div>
                        <!-- password input -->
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="text">Password :-</label>
                            </div>
                            <div class="col-lg-12">
                                <input type="password" name="Password" id="Password" placeholder="Enter Password" class="mt-3 rounded p-2" /><br>
                            </div>
                        </div>
                        <!-- conform password input -->

                        <div class="row">
                            <div class="col-lg-12">
                                <label for="text">Confirm Password :-</label>
                            </div>
                            <div class="col-lg-12">
                                <input type="password" id="Confirm_Password" name="Confirm_Password" placeholder="Enter Password" class="mt-3 rounded p-2" />
                            </div>

                        </div>
                    </div>
                </div>

                <button class="fs-4 w-50 border-0 shadow-2 fw-bold mt-4 rounded-3 bg-primary text-white mx-auto" id="Submit">Submit</button>
            </div>
        </div>
<script>

const Name = document.getElementById("Name");
      const Uname = document.getElementById("Uname");
      const Password = document.getElementById("Password");
      const Confirm_Password =document.getElementById("Confirm_Password")


    document.getElementById("Submit").addEventListener("click", function () {
        alert(`User is successfully created
        \n name : ${Name.value} \n User name : ${Uname.value} \n Password : ${Password.value}`);
      });
</script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"></script>
</body>

</html>