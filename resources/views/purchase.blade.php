<!doctype html>


<head>

<link rel="stylesheet" href="bootstrap.min.css" type="text/css" />
</head>

	<style type="text/css">

        body{
            background-color: #C5D0D1;
            font-family: "Times New Roman";
        }

        h1{
            color: #ff0033;
            text-align: center;
        }

    </style>


<nav class="navbar navbar-default" role="navigation">
<div class="container-fluid">
    <!-- add header -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

    </div>
    <!-- menu items -->


        </ul>
    </div>
</div>
</nav>

<body>
<h1><center> Purchase history </center></h1>
<br>

<form method="post" action="#">
        {{ csrf_field() }}
       <label for="name">Name :</label>
            <input type="text" name="Number" placeholder="Name" />   <br><br>

       <label for="name">Purchase price :</label>
            <input type="text" name="Number" placeholder="Enter Purchase price" />   <br><br>

       <label for="name">Sale price :</label>
            <input type="text" name="Number" placeholder="Enter Sale price" />   <br><br>

       <label for="name">Bar code :</label>
            <input type="text" name="Number" placeholder="Enter  Bar code" />   <br><br>

            <input type="submit" name="submit" value="Submit">

</form>

<FORM METHOD="LINK" ACTION="#">
    <br>
    <INPUT TYPE="submit" VALUE="Back to Main Page">
</FORM>

</body>
</html>