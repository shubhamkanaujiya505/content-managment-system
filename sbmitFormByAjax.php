<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">

    <title>Ajax Form</title>
</head>
<body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12"><br>
                <h3 class="text-success text-center"> Ajax Asyncronous javaScript and xml.</h3>
                  
                <form>
                    <div class="form-group">
                        <label for="user">Username</label>
                        <input type="text" name="" id="user" class="form-contro">

                    </div>

                    <div class="form-group">
                        <label for="pwd">Password</label>
                        <input type="text" name="" id="user" class="form-contro">

                    </div>

                    <div class="form-group">
                        <label >Choose-state</label>
                        <select class="form-control" onchange="myfun(this.value)">
                            <option> select state </option>
                            <option> Maharastra</option>
                            <option> UP</option>
                            <option> Bihar</option>

                        </select>
                    </div>

                    <div class="form-group">
                        <label >Choose-state</label>
                        <select class="form-control" id="city">
                            <option> select City </option>

                        </select>
                    </div>


                </form>


                </div>

            </div>

        </div>
    <script>
                function myfun(data)
                {
                    // alert(data);
                    var req = new XMLHttpRequest();
                    req.open("GET","http://localhost/content-managment-system/resopnse.php?datavalue="+data,true);
                    req.send();

                    req.onreadystatechange=function(){
                        if(req.readyState==4 && req.status == 200){
                            document.getElementById('city').innerHTML = req.responseText;
                        }
                    }

                }


    </script>
</body>
</html>