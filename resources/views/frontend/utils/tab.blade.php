<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Creating Dynamic Tabs in Bootstrap via jQuery</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
$(document).ready(function(){
    $("#myTab a").click(function(e){
        e.preventDefault();
        $(this).tab("show");
    });
});
</script>

<style>
    .nav-tabs>li>a.active{
        color: yellow;
        font-size:20px;
    
        
    }

    .nav-tabs >li > a{
        color: black;
    }
</style>
</head>
<body>
<div class="m-4" style="font-size:20px;margin-left:200px;">
    <ul class="nav nav-tabs" id="myTab" style=" margin-left:300px;">
        <li class="nav-item">
            <a href="#description" class="nav-link active">Description</a>
        </li>
        <li class="nav-item">
            <a href="#addInformation" class="nav-link">Additional Information</a>
        </li>
        <li class="nav-item">
            <a href="#features" class="nav-link">Features</a>
        </li>
        
        <li class="nav-item">
            <a href="#benefits" class="nav-link">Benefits</a>
        </li>
    </ul>
    <div class="tab-content" style="margin-top:20px;">
        <div class="tab-pane fade show active" id="description">
            <p>{{$product->description}}</p>
        </div>
        <div class="tab-pane fade" id="addInformation">
            <p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh urna, ornare id gravida ut, mollis a magna. Aliquam porttitor condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit bibendum turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed consequat ante in rutrum convallis. Nunc facilisis leo at faucibus adipiscing.</p>
        </div>
        <div class="tab-pane fade" id="features">
            <p>Donec vel placerat quam, ut euismod risus. Sed a mi suscipit, elementum sem a, hendrerit velit. Donec at erat magna. Sed dignissim orci nec eleifend egestas. Donec eget mi consequat massa vestibulum laoreet. Mauris et ultrices nulla, malesuada volutpat ante. Fusce ut orci lorem. Donec molestie libero in tempus imperdiet. Cum sociis natoque penatibus et magnis.</p>
        </div>

        <div class="tab-pane fade" id="benefits">
            <p>Donec vel placerat quam, ut euismod risus. Sed a mi suscipit, elementum sem a, hendrerit velit. Donec at erat magna. Sed dignissim orci nec eleifend egestas. Donec eget mi consequat massa vestibulum laoreet. Mauris et ultrices nulla, malesuada volutpat ante. Fusce ut orci lorem. Donec molestie libero in tempus imperdiet. Cum sociis natoque penatibus et magnis.</p>
        </div>
    </div>
</div>
</body>
</html>