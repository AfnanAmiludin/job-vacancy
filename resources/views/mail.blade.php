<!DOCTYPE html>
<html>
<head>
    <title>web.poltekbangsby.ac.id</title>
</head>
<body>
  
    <h1>Hi, {{ $user->name }}</h1>
    <h3>Potition: {{ $job->potition }}</h3>
    <h4>Company Name: {{ $job->name }}</h4>
    <h5>Salary: {{ $job->salary }}</h5>
    <h5>Address: {{ $job->address }}</h5>
    <p>Description: {{ $job->description }}</p>
    <div class="sb-nav-link-icon"><i class="fa fa-envelope"></i> {{$job->email}}</div>
    <div class="sb-nav-link-icon"><i class="fa fa-phone"></i> {{$job->telephone}}</div>
    <p>Thank you</p>
</body>
</html>