<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: '';
    }

    .container{
        width: 100%;
        height:100vh;
        background: url('Backend/assets/image/bg-pattern.jpg');
        background-size: cover;
        /* background:#3c5077;*/
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .popup{
        width: 300px;
        background-color: #fff;
        border-radius: 6px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%) scale(1);
        text-align: center;
        padding: 0 30px 30px;
        color: #333;
        visibility: visible;
        transition:transform 0.4s , top 0.4s;

    }
    .open-popup{
        visibility: hidden;
        top: 0;
        transform: translate(-50%,-50%) scale(0.1);

    }
    .popup img{
        margin-top: -42px;
        border-radius: 50%;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }

    .popup h2{
        font-size: 38px;
        font-weight: 500;
        margin: 30px 0 10px;


    }
    .popup button{
        width: 100%;
        margin-top:50px ;
        padding: 10px 0;
        background-color:#42C0FB ;
        color: #fff;
        border: 0;
        outline: none;
        font-size: 18px;
        border-radius: 4px;
        cursor: pointer;
        box-shadow: 0 5px 5px rgba(0,0,0,0.2);
    }



</style>
<body>
    <div class="container">
            <!-- <button type="submit" class="btn" onclick="openpopup()">Submit</button> -->
            <div class="popup" id="popup">
                <img src="Backend/assets/image/cancel_popup.jpg" alt="" width="80" height="80">
                <h3>Access Denied !</h3><br>
                <p>please check your credantioal</p>
                <button type="button" onclick="closepopup()">Ok</button>
            </div>
    </div>

    <script>
        let popup=document.getElementById('popup');

        // let openpopup =()=>{
        //     popup.classList.add('open-popup');

        // }
        let closepopup = () =>{
            popup.classList.add('open-popup');
            window.location.replace('login.php');
        }
    </script>
</body>
</html>