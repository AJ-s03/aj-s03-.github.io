<?php
    session_start();
    if ($_SESSION["logged_in"] != true){
        header("location: login.php");
    }
    include "dbconnect.php";
    $user = $_SESSION['user'];
    $emptyflag = false;

    $insertflag = false;
    if ($_SERVER['REQUEST_METHOD'] == "POST"){

        //If modification button is clicked
        if (isset($_POST['sno-edit'])){
            $updateflag = false;
            $sno_edit = $_POST['sno-edit'];
            $title_edit = $_POST['title-edit'];
            $date_edit = $_POST['date-edit'];
            $des_edit = $_POST['des-edit'];
            $qeury = "Update notes set title = '$title_edit', date = '$date_edit', des =  '$des_edit' where sno = '$sno_edit' and user = '$user'";
            $result = mysqli_query($connection, $qeury);
        
            if($result){
                $updateflag = true;
            }
            $title_edit = "";
            $date_edit = "";
            $des_edit = "";
        }
        
        //If delete button is clicked
        elseif (isset($_POST['sno-del'])) {
            echo "working";
            $delflag = false;
            $sno_del = $_POST['sno-del'];

            $qeury = "Delete from notes where sno = $sno_del and user = '$user'";
            $result = mysqli_query($connection, $qeury);
            if($result){
                $delflag = true;
            }
            $sno_del = "";
        }

        //If Add note button is clicked
        else{
            $title = $_POST['title'];
            $date = $_POST['date'];
            $des = $_POST['des'];
            if (!(isset($title)) || !(isset($date)) || !(isset($des)) ){
                exit("");
            }
            $qeury = "insert into notes (title, date, des, user) values('$title', '$date', '$des', '$user')";
            $result = mysqli_query($connection, $qeury);
            
            if($result){
                $insertflag = true;
            }
            $title = "";
            $date = "";
            $des = ""; 
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>You Do List</title>
    <script src="jquery_3_7_1.min.js"></script>
    <link rel="stylesheet" href="styles_index.css">
   
</head>

<body>
    <div id = 'particles-js' style="width:100vw;height:10vh;">
        <h1 class = "wel-banner" >Welcome <?php echo $_SESSION["user"]; ?> </h1>
    </div>
    <marquee style="color: aliceblue;"><pre>C o m m i t m e n t   I s   T h e    W a y   T o   S u c c e s s!</pre></marquee>
    <div class="heading">
        <h2>You-Do List</h2>
        <button id = "logout-btn"><a href="logout.php" style = "text-decoration:none;">Logout</a></button>
    </div>
    <h1>Add a note : </h1>
    <form action = "index.php" method = "post">
        <h2>Enter Your title : </h2>
            <label for = "title">
        <input type = "text" name = "title">
        </label>
        <br>
        <h2>Date : </h2>
        <label for = "date">
            <input type = "text" name = "date" placeholder = "YYYY-MM-DD">
        </label>
        <br>
        <h2>Description : </h2>
        <label for = "des">
        <!-- <input style = "width:500px; height: auto;" type = "text" name = "des"> -->
            <textarea name="des" cols="60" rows="10"></textarea>
        </label>
        <br><br>
        <label for = "submit">
            <input type = "submit" value="Add note" id = "add-btn">
        </label>
    </form>
    <br>
    <?php
        if ($insertflag){
            echo "<div style='color:aliceblue;'>Task completed successfully</div>";
            $insertflag = false;
        }
    ?>
    <br><hr><hr><br>
    <h4 style="color: aliceblue;">You-Do list's todays task : </h4>
    <?php
        $date = date("y-m-d"); 
        $get = "Select * from notes where date like '%__$date' and user = '$user'";
        $result1 = mysqli_query($connection, $get);
        echo "<h1 style = 'color:white;'>".$date."</h1>";
        $num = mysqli_num_rows($result1);
        if ($num >= 1){
            while ($row = mysqli_fetch_assoc($result1)) {
                echo "<li style = 'color:aliceblue;'>"."<div class = 'box'><h2>".$row['title']."</h2></div>"."<br>"."<div class = 'box'><h2>".$row['des']."</h2></div>"."</li><br>";
            }    
        }
        else
            echo "<marquee style='color:aliceblue;'><pre>N o  T a s k  F o r  T o d a y !  T a k e  a  B r e a k !</pre></marquee>"
    ?>
    <br><hr><hr><br>
    <h5 style="color: aliceblue;">Search for specific record here : </h5>
    <div class="button">
        <form action = "index.php" method = "gte">
            <input type="submit" value="Search" name="search-button" id = "search-btn">
            <label style = "color:aliceblue;" for="title-search">Search with title:
                <input type="text" value = "Title.." name="title-search" id="title-search" placeholder="Enter your title here...">
            </label>
            <label style = "color:aliceblue;" for="date-search">Search with date:
                <input type="text"  value = "Date.." name="date-search" id="date-search" placeholder="Enter the date here...">
            </label>
        </form>
    </div>
    
    <!-- Modification modal -->
    <div class="modal-container" id = "editmodal" tableindex="-1" role = "dialog" aria-hidden ="true">
        <div class="modal">
            <div class="modal-header">
                <h1>Edit form</h1>
                <button type="button" class="btn-close" style="cursor: pointer;" onclick = "close_modal()">Close</button>
            </div>
            <div class="modal-content">
                <h1>Modify : </h1>
                <form action = "index.php" method = "post">
                    <h2>Enter Your title : </h2>
                    <label for="sno" style = "display:none;">
                        <input type="text" name="sno-edit" id="sno-edit" style = "display:none;">
                    </label>
                    <label for="title">
                        <input type="text" name="title-edit" id="title-edit">
                    </label>
                    <br>
                    <h2>Date : </h2>
                    <label for="date">
                        <input type="text" name="date-edit" id ="date-edit" placeholder="YYYY-MM-DD">
                    </label>
                    <br>
                    <h2>Description : </h2>
                    <label for="des">
                        <input style="width:500px; height: auto;" id = "des-edit" type="text" name="des-edit">
                        <!-- <textarea name="des-edit" cols="60" rows="10"></textarea> -->
                    </label>
                    <br><br>
                    <label for="submit">
                        <input type="submit" style="cursor: pointer;" value="Save Changes" onclick = "close_modal()" id = "save-changes-btn">
                    </label>
                </form>
            </div>
        </div>
    </div>
    <?php
        if ($updateflag){
            echo "<div style='color:aliceblue;'>Task completed successfully</div>";
            $updateflag = false;
        }
    ?>

    <!-- Deletion modal -->
    <div class="modal-container-del" id = "editmodal-del" tableindex="-1" role = "dialog" aria-hidden ="true">
        <div class="modal-del">
            <div class="modal-header-del">
                <h1>Are You Sure?</h1>
                <button type="button" style="cursor: pointer;" class="btn-close" onclick = "close_modal()">Close</button>
            </div>
            <div class="modal-content-del">
                <h1>delete: </h1>
                <form action = "index.php" method = "post">
                    <h3 id="del-title"></h3>
                    <label for="del-sno-label" style = "display:none;">
                        <input type="text" name="sno-del" id="sno-del" style = "display:none;">
                    </label>
                    <label for="submit">
                        <input type="submit" id= "del-btn" style="cursor: pointer;" value="Delete" onclick = "close_modal()">
                    </label>
                </form>
            </div>
        </div>
    </div>
    <?php
        if ($delflag){
            echo "<div style='color:aliceblue;'>Task completed successfully</div>";
            $delflag = false;
        }
    ?>
    <br><hr>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == "GET"){

            //Check for title
            if ($_GET['title-search'] != "Title.." and $_GET['title-search'] != "") {
                
                $title_search = $_GET['title-search'];
                $get = "Select * from notes where title = '$title_search' and user = '$user'";
                $result2 = mysqli_query($connection, $get);
                if ($result2 == false){
                    echo "<h1 style='color:aliceblue;'>Server down</h1>";
                }
                $num = mysqli_num_rows($result2);
                if ($num == 0){
                    $emptyflag = true;
                }
                while ($row = mysqli_fetch_assoc($result2)) {
                    echo "
                        <table border='2px'>
                            <thead>
                                <th id='serialno' style='display:none;'>
                                    Serial no
                                </th>
                                <th class='show'>
                                    <h1>Title</h1>
                                </th>
                                <th class = 'show'>
                                    <h1>date</h1>
                                </th>
                                <th class='show'>
                                    <h1>Description</h1>
                                </th>
                                <th id='show'>
                                    <h1>Action</h1>
                                </th>
                            </thead>
                            <tbody>
                                <tr class='show'>
                                    <td style='display:none;'>".$row['sno']."</td>
                                    <td><h2>".$row['title']."</h2></td>
                                    <td><h2>".$row['date']."</h2></td>
                                    <td><h2>".$row['des']."</h2></td>
                                    <td>
                                    <button name='modify' style='cursor: pointer;font:xxlarge;' class='modify-btn' >Modify</button>
                                    <button name='delete' style='cursor: pointer;font:xxlarge;'class='delete-button' >Delete</button>
                                    </td>
                                </tr>
                            </tbody?
                        </table>";
                }
            }

            //Check for date
            elseif ($_GET['date-search'] != "Date.." and $_GET['date-search'] != "") {
                $date_search = $_GET['date-search'];
                $get = "Select * from notes where date = '$date_search' and user = '$user'";
                $result2 = mysqli_query($connection, $get);
                $num = mysqli_num_rows($result2);
                if ($num == 0){
                    $emptyflag = true;
                }
                if (!($result2)){
                    echo "<h1 style='color:aliceblue;'>Server down</h1>";
                }
                while ($row = mysqli_fetch_assoc($result2)) {
                    echo "
                        <table border='2px'>
                            <thead>
                                <th id='serialno' style='display:none;'>
                                    Serial no
                                </th>
                                <th class='show'>
                                    <h1>Title</h1>
                                </th>
                                <th class = 'show'>
                                    <h1>date</h1>
                                </th>
                                <th class='show'>
                                    <h1>Description</h1>
                                </th>
                                <th id='show'>
                                    <h1>Action</h1>
                                </th>
                            </thead>
                            <tbody>
                                <tr class='show'>
                                    <td style='display:none;'>".$row['sno']."</td>
                                    <td><h2>".$row['title']."</h2></td>
                                    <td><h2>".$row['date']."</h2></td>
                                    <td><h2>".$row['des']."</h2></td>
                                    <td>
                                    <button name='modify' style='cursor: pointer;font:xxlarge;' class='modify-btn' >Modify</button>
                                    <button name='delete' style='cursor: pointer;font:xxlarge;' class='delete-button' >Delete</button>
                                    </td>
                                </tr>
                            </tbody?
                        </table>";
                }
            }
            
        }
    ?>
    <?php if($emptyflag){echo "<h4 style='color:aliceblue;'>No entries with provided information.</h4>";}?>
    <script>

        //Script for modification
        edit = document.getElementsByClassName('modify-btn');
        Array.from(edit).forEach((element) =>{
            element.addEventListener("click",(e)=>{
                //Fetching placeholders
                const modal = document.getElementsByClassName("modal-container")[0];
                const sno = document.getElementById("sno-edit");
                const title = document.getElementById("title-edit");
                const date = document.getElementById("date-edit");
                const des = document.getElementById("des-edit");
                tr = e.target.parentNode.parentNode;
                sno1 = tr.getElementsByTagName("td")[0].innerText;
                title1 = tr.getElementsByTagName("td")[1].innerText;
                date1 = tr.getElementsByTagName("td")[2].innerText;
                des1 = tr.getElementsByTagName("td")[3].innerText;
                
                //console.log(sno1,title,date,des);

                //Assigning values to placeholders
                sno.value = sno1;
                title.placeholder = title1;
                date.placeholder = date1;
                des.placeholder = des1;
                modal.style.display = "flex"; 
            })
        })

        //Script for deletion
        del = document.getElementsByClassName('delete-button');
        Array.from(del).forEach((element) =>{
            element.addEventListener("click",(e)=>{
                
                //Fetching placeholders
                const modal_del = document.getElementsByClassName("modal-container-del")[0];
                tr = e.target.parentNode.parentNode;
                const sno1 = tr.getElementsByTagName("td")[0].innerText;
                const title1 = tr.getElementsByTagName("td")[1].innerText;
                const sno = document.getElementById("sno-del");
                const title = document.getElementById("del-title");

                //Assigning values to placeholders
                title.innerText = title1;
                sno.value = sno1;
                console.log(sno.value);
                modal_del.style.display = "flex"; 
            })
        })

        function close_modal() {
            const modal = document.getElementsByClassName("modal-container")[0];
            const modal_del = document.getElementsByClassName("modal-container-del")[0];
            modal.style.display = "none";
            modal_del.style.display = "none";
        }
    </script>
     <script src=
		"particles.js-master/particles.js">
	</script>
	<script src=
		"particles.js-master/demo/js/app.js">
	</script>
</body>

</html>