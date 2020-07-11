@extends('include/include')
@section('content')
    <?php
        file_put_contents('export.txt', var_export($_POST,true));
    ?>
@endsection