<?php


?>
@extends('layouts.appmaster')
@section('title', 'Assessment')
@section('content')

<!DOCTYPE html>
<html>
    <head>
        <meta charset="ISO-8859-1">
        <title>Assessment</title>
    </head>
    <body>
        <form action="doAssessment" method="post">
            <h2>Assessment Form</h2>
            
            <table>
                <!-- Field 1 -->
                <tr>
                    <td>Field 1</td>
                    <td><input type="text" name="val1"/></td>
                </tr>
                <!-- Field 2 -->
                <tr>
                    <td>Field 2</td>
                    <td><input type="text" name="val2"/></td>
                </tr>
                <!-- Field 3 -->
                <tr>
                    <td>Field 3</td>
                    <td><input type="text" name="val3"/></td>
                </tr>
                <!-- Field 4 -->
                <tr>
                    <td>Field 4</td>
                    <td><input type="text" name="val4"/></td>
                </tr>
               
                <!-- Submit Button -->
                <tr>
                	<td>
                        <input type="hidden" name="_token" value="<?php echo csrf_token()?>">
                        <button class="btn btn-info" type="submit">Submit</button>
                    </td>
                </tr>
                
            </table>
        </form>
        @if(isset($result))
        	@if($result)
            	<h3>One of the values equals to "CST-256"</h3>
        	@else
            	<h3>None of the values equals to "CST-256"</h3>
        	@endif
        @endif
        

    </body>
</html>

@endsection