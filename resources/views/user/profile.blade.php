
                    @include('user.layouts.header')


   
                    <main>
                        <div class="container-fluid">
                            <!-- START: Breadcrumbs-->
                            <div class="row">
                                <div class="col-12  align-self-center">
                                    <div class="sub-header mt-3 py-3 px-3 align-self-center d-sm-flex w-100 rounded">
                                        <div class="w-sm-100 mr-auto"> <b>Welcome to your Portfolio</b></div>
                
                                        <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item active">Profile</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                
                            <!-- START: Card Data-->
                
                
                            <div class="col-12  col-lg-12 col-xl-12 mt-3">
                                <div class="card">
                                    <div class="col-12 col-lg-12 col-xl-12 mt-3">
                                        <div class="card shadow-sm border-0 rounded-lg">
                                            <div class="card-body p-4">
                                                <!-- Profile Card -->
                                                <div class="card card-primary card-outline border-0 shadow-sm">
                                                    <div class="card-body p-4">
                                                        <!-- Avatar Section -->
                                                        <div class="text-center mb-4 position-relative">
                                                            <label for="profile-picture" class="avatar-upload-label position-relative">
                                                                <img class="img-fluid rounded-circle border border-light shadow-sm" src="/profilep.png" width="150" alt="User profile picture" id="profile-picture-preview">
                                                                <div class="upload-text">Click to upload</div>
                                                            </label>
                                                            <input type="file" name="" id="profile-picture" accept="image/*" class="d-none" onchange="previewImage(event)">
                                                        </div>
                                    
                                                        <!-- Profile Details Section -->
                                                        <h4 class="text-center font-weight-bold mb-3">Profile Details</h4>
                                                        <hr class="my-3">
                                                        <!-- Display Information Section -->
                                                        <div class="mb-4">
                                                            <div class="row mb-3">
                                                                <div class="col-md-6">
                                                                    <strong class="text-secondary">Name:</strong>
                                                                    <span class="ml-2">{{Auth::user()->name}}</span>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <strong class="text-secondary">Email:</strong>
                                                                    <span class="ml-2">{{Auth::user()->email}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <strong class="text-secondary">Phone Number:</strong>
                                                                    <span class="ml-2">{{Auth::user()->phone}}</span>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <strong class="text-secondary">Address:</strong>
                                                                    <span class="ml-2">{{Auth::user()->address}}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @if (session('status'))
                                                        <div class="alert alert-success" role="alert">
                                                            {{ session('status') }}
                                                        </div>
                                                        @endif
                                                        @if($message = Session::get('success'))
                                                        <div class="alert alert-success">
                                                            <p>{{$message}}</p>
                                                        </div>
                                                        @endif
                                                        <!-- Editable Inputs Section -->
                                                        <form action="{{url('/profile-update')}}" method="POST">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label for="name" class="font-weight-bold text-secondary">Edit Name</label>
                                                                <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" value="{{Auth::user()->name}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="email" class="font-weight-bold text-secondary">Edit Email</label>
                                                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="{{Auth::user()->email}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="phone" class="font-weight-bold text-secondary">Edit Phone Number</label>
                                                                <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter phone number" value="{{Auth::user()->phone}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="address" class="font-weight-bold text-secondary">Edit Address</label>
                                                                <input type="text" name="address" class="form-control" id="address" placeholder="Enter address" value="{{Auth::user()->address}}">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary btn-block rounded-pill shadow-sm">Update Profile</button>
                                                        </form>
                                    
                                                        <!-- Security Section -->
                                                        <h4 class="text-center font-weight-bold mt-4 mb-3">Security</h4>
                                                        <hr class="my-3">
                                                        <div class="form-group">
                                                            <label class="font-weight-bold text-secondary">Two-Factor Authentication</label>
                                                            <p class="text-muted">Disabled</p>
                                                        </div>
                                    
                                                        <!-- Password Update Section -->
                                                        <h4 class="text-center font-weight-bold mt-4 mb-3">Update Password</h4>
                                                        <hr class="my-3">
                                                        <form>
                                                            <div class="form-group">
                                                                <label for="current-password" class="font-weight-bold text-secondary">Current Password</label>
                                                                <input type="password" name="old_password" class="form-control" id="current-password" placeholder="Enter current password">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="new-password" class="font-weight-bold text-secondary">New Password</label>
                                                                <input type="password" name="new_password" class="form-control" id="new-password" placeholder="Enter new password">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="confirm-password" class="font-weight-bold text-secondary">Confirm New Password</label>
                                                                <input type="password" class="form-control" id="confirm-password" placeholder="Confirm new password">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary btn-block rounded-pill shadow-sm">Update Password</button>
                                                        </form>
                                                       
                                                    </div>
                                                </div>
                                                <!-- /.card -->
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- JavaScript for Image Preview -->
                                    <script>
                                        function previewImage(event) {
                                            const reader = new FileReader();
                                            reader.onload = function() {
                                                const output = document.getElementById('profile-picture-preview');
                                                output.src = reader.result;
                                            }
                                            reader.readAsDataURL(event.target.files[0]);
                                        }
                                    </script>
                                    
                                    <!-- CSS for Profile Card -->
                                    <style>
                                        .avatar-upload-label {
                                            cursor: pointer;
                                            display: inline-block;
                                        }
                                    
                                        .avatar-upload-label:hover .upload-text {
                                            display: block;
                                        }
                                    
                                        .upload-text {
                                            position: absolute;
                                            bottom: 0;
                                            left: 0;
                                            right: 0;
                                            background-color: rgba(0, 0, 0, 0.5);
                                            color: white;
                                            text-align: center;
                                            padding: 5px;
                                            font-size: 14px;
                                            display: none;
                                        }
                                    
                                        #profile-picture-preview {
                                            border: 4px solid #007bff;
                                            padding: 3px;
                                            transition: all 0.3s ease-in-out;
                                            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
                                        }
                                    
                                        .form-control {
                                            border-radius: 0.375rem;
                                            border-color: #e0e0e0;
                                            transition: border-color 0.3s ease-in-out;
                                        }
                                    
                                        .form-control:focus {
                                            border-color: #007bff;
                                            box-shadow: none;
                                        }
                                    
                                        .btn-primary {
                                            background-color: #007bff;
                                            border: none;
                                            transition: background-color 0.3s ease;
                                        }
                                    
                                        .btn-primary:hover {
                                            background-color: #0056b3;
                                        }
                                    
                                        .card-body {
                                            padding: 20px;
                                        }
                                    
                                        .text-muted {
                                            font-size: 0.9rem;
                                        }
                                    
                                        .font-weight-bold {
                                            font-size: 1rem;
                                        }
                                    
                                        hr {
                                            border-top: 1px solid #e0e0e0;
                                        }
                                    </style>
                                    
                
                
                
                
                
                                    <br><br><br>
                
                                    <!-- send all users email -->
                                </div>
                            </div>
                        </div>
                        </div>
                        <!-- END: Card DATA-->
                        </div>
                
                    </main>
        @include('user.layouts.footer')
