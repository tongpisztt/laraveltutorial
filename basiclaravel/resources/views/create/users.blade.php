<!--<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Show View</title>
</head>
<body>
    <h1>View Data : </h1>
   <h2><?= $name ?></h2>      ใช้ตอนชื่อไฟล์ไม่ใช้ .blade.php
    <h2><?= $title ?></h2> 

    <h2>{{$name}}</h2>      ใช้ได้ตอนเปลี่ยนชื่อไฟล์เป็น .blade.php แล้ว
    <h2>{{$title}}</h2> 
</body>
</html>
-->

@extends('master')
@section('title','Welcome UserView')
@section('content')
    <h1>Welcome : {{$name}}</h1>
    <h2>This is : {{$title}}</h2>
@stop