<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login | MCF</title>
     <link rel="shortcut icon" href="assets/images/app-logo.svg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
     <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/normalize.css">

</head>

<body class="h-100">

<!-- Preloader -->
<div class="preloader">
    <div class="loader">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>

        <div class="indicator">
            <svg width="16px" height="12px">
                <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
            </svg>
        </div>
    </div>
</div>
<!-- End Preloader -->


<div class="container-fluid full-bg h-100">
    <div class="container h-100">
        <div class="row no-margin h-100">
            <div class="bg-layer d-flex col-md-4">
            <form   class="user" >
                <div class="login-box row">
                    <a href="index.html"><img style="width: 350px;" src="assets/images/app-logo.svg" alt=""> </a>
                    <h3>login</h3>
                    <div class="input-group mb-3" style="border-radius: 25px;">
                        <div class="input-group-prepend">
                            <span class="input-group-text" style="border-top-left-radius: 25px; border-bottom-left-radius: 25px;"><img

                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAC6UlEQVR4nO2ZXWiOYRjHf+ZzxLAkiQOfs1lTlEU5UEI7c4BoDsbJEFpKdkTKjnzswFdKDtd8TU4wiinNwcpnYhxoSGJMiLG9uvR/67byvs/7PrP7Vu+v7qP3vv7P/36f5/64rhty5PjvmAGsB/YC9cBBoBZYCgwhcAYDVcBDIJGiPQOWECiTgNuO2VdAI3AIqFGzN/NEv38FjgCLCIixjsGnQAUw6C9984ADfd5QAzCSADgtQ21AQYT+NphiYAfwVrHn8cxU4CfwAyjLIn4a0KnBrMAjm2XiXAyNPc4n5o0LMrExhsYcaTzHI60yUR5z2f4G9Pqc9O0aSFFMnS7p2ArohccyMDumzhfpjMETN2Ugzk49Xhqf8UiDTKyNobFQGvfxSK1M1MXQ2CmNY3hkuUxcj6FxSRrr8MhKmfiU5fF8GPBRGhV45IZM7EpxUEyFxeyWxjU8klx+szlnJSmTxiM8ckYmLKHKlk3SaMQjG2TihZKnTKlRrGlU4hE7J53VOalLuUZU8pyjiZ2eTcs7d2WoJIOYUsXYPAuGepnan0FMnWKOExDzZcqyvQkRz1fvFbOYwGiSMdtbClP0Gw1cUd9mAmQy8CZColWkPrajTydQ2iIMpNgp1AXLgwgDSeboHQRMu0zOTVNCSqimFSQTleWZySkp+hVoA/2uQQVFKXBPg7gcoX+jsxkuIABKlNl1O7VfK2ino9Cp2lul8hQwjwHGEqhVygp7ZaZHNeBMyjm2n5xUbLKgfQtYDQz9h/4ZAWx1TqsJlXFOpJnc6bBV7Kgzv6y9BLYD+f3o/3cWV6U7j+SD7LPYBozrx+cUAFucuWbttfKVbLLPPxgFXHSEWweoar6sz8VRk7xkxXCgRULvgDUMPJXOJ9eiYkXGHHZ24Fn4Xdo75MVuuzJipi5velQJ9E25vHTrxjgy+/QPXCUcmuXJrrwjc0dB1YRDtbPgROZDmrtyn60z6iDyAzCbSNNsc86RIwfR+AUnligdzeBw0AAAAABJRU5ErkJggg==" alt=""></span>
                        </div>
                        <input id="emailInput" name="email" placeholder="Enter Email Address" type="text" class="form-control" style="border-top-right-radius: 25px; border-bottom-right-radius: 25px;" required>
                    </div>
                    <div class="input-group mb-3" style="border-radius: 25px;">
                        <div class="input-group-prepend">
                            <span class="input-group-text" style="border-top-left-radius: 25px; border-bottom-left-radius: 25px;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABv0lEQVR4nO2YT0oDMRSHPxBE0BOIrV2Ih1APoCvBhXoHreIVFK0utGsR3FXFA6hHKbhTa11boQU7RgJvYChTpp2/Cc0HD4Yweclv3stLJuBwWEMZqAIvQBP4EWtK2z5QwmAWgGugD6gI84BHoIJhbMlX15PsAg1gG1gGZsX08w5wB/Tk3Q6wiSEcAX8ysYakVhSLwH0gOocYEAkP+AX2YvSvSl+vyMiUAukUR4TPgfj4BuYpgNtAOiXlQXzdkDNlqU7dEddEFBUpAH2pfrlRTTEaPv7iT5KmY/Msg+oSmxa74vOJHHmVQZdS9Kn3GSUngNzoyKBzKfrUvvxNMjf8o4YtfofihESgXEQmIbWmgQvgc4T/i6ytBdRkTmNzboAANWBncYS0pPMKxbMaiIz5FSSr+TghGaFcRHBrJBOUSy2SpdYMUAfacjq4kjbrIlIP2ZkvbRTSDhHyZaOQ9xAhbzYKOQkRcmyjkKkQIbrNyvKrBiwNX2PjhAxZ8EkWeuER2RAB2tYT+lLuiII7/WaCcqmFS61MUBOfWi35AvpyrGjWZC4fcTrXDLgiVQN2GkeIvjDWYvzIFGk6ElrE0Evsf2EQelGrxQnWAAAAAElFTkSuQmCC"></span>
                        </div>
                        <input id="passwordInput" name="password" type="password" placeholder="Enter Password" class="form-control" style="border-top-right-radius: 25px; border-bottom-right-radius: 25px;" required>
                    </div>
                    <div class="input-group mb-3 style="border-radius: 25px;">
                        <div class="d-flex">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="border-top-left-radius: 25px; border-bottom-left-radius: 25px;">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEm0lEQVR4nO2bS4gdVRCGPzHOFVFxBC/iBRduFGJ0IuiMkqA7XxslxoVC0IWuMgORgOhCwWC8ktdExUBAVxHEhSiIaPCBD9RAQiJGCBIIGmcgoiLJBJPMxJYD/4Gi6dft29OvTEHR3edUVdf5u/r0qepuWKIlSqIOMAX8AMwBQc15Tr5OyvehqAccqsGg8vJBjSEXdczgfwPWAFdQf3I+PgQcMSDkioQpM/iraR6Nync3hvV5DOyTsrvyjh4AjtcgrNPY+XiffF6rtu/zAHBKyj7smzB4z7/K5yt1fDIPAIE47riuVJjfwRIALEoErAB2Aof1zJ7T/jRwc5sjoAO8CZxPuHcXgDeAkbYB0AG+kP6/ioA7gMuBy7T/GnBWMp8PAUItAdgl3d+BsQS5WyXjZF9vCwArFPZnNMA0WilZdzssbwMA09JzIZ5En4rR1Xc629sAwM/SG0+Q6Rn7NwET2v+pQr8pytBJ6bkJL46eM/YntfrMu4KrHQBBgl5Pg/ezv+NZYFWB56sNAEEKvwzsjWhvNQD/aND3m/XCS8CxpgMwAryqcB52IDNAf4CFUS0A6CeEcpydODnP/RL8LszQjGRvLwAAPyE6m40DYLyAW2B1EwHoR4Rw0jogTH4dYPmVEvwudBLsm0gIlPF5mjHhHXWFJ5o+CVraFpEL9FOusM8FtjI41Q6A5crszphU2EZI+AqPaWU4r7ygKr8pzJDJCNPqAWOmHpAnE6wtACPAJ9I/qxCf0MTo+E61+ZzgY+CSNgHgl7k7Iu79MG9vY02QCDsHgL/FBxbBftxx+YZCFGen9QDcCGwydtYBy8TrTPsmybYCgFHgaeBb4L8M979lV0p7FuhW4PfQhm4B3g1VehzvAe4BNkYMeKP69oTanY13VF2uPQAXAS9qERNo+5FefQV6CnRV7Ay0tftd86Q4LF1v6xzwvM5RWwB2SWZBb3+uM7X+ebUflcxxDbhrXr0flcy8dBxdD7ytdg9i0X4XYugp9Z8G7o3o3xwK7QWly+NmcJ6dbJjWKApc/+N1A2BUz3PX/1iMzKX6UmM/sDtiDtitvu8kG7WQ+syAvDVmwVQJAFPqcy9As9C1EQC4tixZZVqNoBIA9qrv0Yy2b5P8IfMlmmtLor8kd5epIcwO6XciDWLohPr8pJem87DaPxAHaivCn0oAWFDfxSk2PG1Q+7RJlTc0GYAgozOedppBWzAuGAA+NGFvb4cLBoAf1b5S7CfExgMQFMhZ/flTk/AWrQsqAeCbCgGwvN/sb9PiqRQAiibn+IPAk8ANKf7YdUGYbaXJR0jtAbjKfKgdKDF6IoM/WQDJ+napNACibL6gtl+At1RIsXWFON0sgMw2AYD3Q5/phxOnrP4N7X9Q0S3g64bv6birL0nC53cT79cDHDcGgJ75V+FutT1TwPkH1j9Vgx8mDiq/cLP3V8o6SwNgnxTcD0joNxT/D06Z7KrKRdDAAExK4YgqPmXTIzr/H3o0lg5ARyEY6Mqv1T84ZdKXQ74ptpRrDukZEKrkc0O+LcoNAJqA1qug6SfGsvm86o6VAFA1XaPP7ZaIRaL/AQBYyYQuKi3wAAAAAElFTkSuQmCC">                                </span>
                            </div>
                            <select class="" style="width: 350px;height: 50px; border-bottom-right-radius: 25px;border-top-right-radius: 25px;" name="userType" id="userTypeSelect" required>
                                 <option value="admin">Admin</option>
                                <option value="employee">Employee</option>
                                <option value="officer">Officer</option>
                            </select>
                        </div>
                    </div>
                    <p id="passwordError" style="color: red;"></p>
                    <button    type="submit" class="btn btn-success" style="border-radius: 25px;">Click to Login</button>
                    <a href="index.html" style="margin-left: 150px;color: #FFFFFF">Back to Home</a>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<div class="modal fade" id="validationModal" tabindex="-1" aria-labelledby="validationModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" dir="ltr">
                <h1 class="modal-title fs-5" id="editPasswordLabel">Validation Message</h1>
                <button type="button" style="" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form  dir="ltr">
                <div class="modal-body">
                    <div class="modal-body" id="validationMessage" style="color: red; font-weight: bold;"></div>
                </div>

                <div class="modal-footer">
                     <button type="button" id="btnGo" class="btn btn-success" onclick="successAction()" data-bs-dismiss="modal">Go</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const loginForm = document.querySelector('.user');

        loginForm.addEventListener('submit', function (event) {
            event.preventDefault();

            const emailInput = document.getElementById('emailInput');
            const emailValue = emailInput.value.trim();

            const passwordInput = document.getElementById('passwordInput');
            const passwordValue = passwordInput.value.trim();
            // get use type
            const userTypeSelect = document.getElementById('userTypeSelect');

            // AJAX request
            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'action/login.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onload = function () {
                if (xhr.status === 200) {
                    const response = JSON.parse(xhr.responseText);
                    if (response.success) {
                        // Redirect based on user type
                     //   successAction(response.userType);
                        // print user type in console
                        if(userTypeSelect.value === response.userType){
                            successAction(response.userType,response.id);
                        }
                        else  {
                            displayValidationMessage('Invalid User Type', 'error');
                        }
                    } else {
                        displayValidationMessage(response.message, 'error');
                    }
                } else {
                    console.log('Request failed.  Returned status of ' + xhr.status);
                }
            };
            xhr.send('email=' + emailValue + '&password=' + passwordValue);
        });
    });

    function successAction(userType,id) {
        if (userType === 'admin') {
            window.location.href = 'admin/';
        } else if (userType === 'employee') {
            window.location.href = 'employee/';
        } else if (userType === 'officer') {
            window.location.href = 'EquipmentOfficer/index.php?id='+id;
        }
    }

    function displayValidationMessage(message, type) {
        const validationModal = document.getElementById('validationModal');
        const validationMessage = document.getElementById('validationMessage');

        validationMessage.textContent = message;
        validationMessage.style.color = type === 'success' ? 'green' : 'red';
        $(validationModal).modal('show');
    }

</script>


<!-- jquery Min JS -->
<script src="assets/js/jquery.min.js"></script>
<!-- jquery Migrate JS -->
<script src="assets/js/jquery-migrate-3.0.0.js"></script>
<!-- jquery Ui JS -->
<script src="assets/js/jquery-ui.min.js"></script>
<!-- Easing JS -->
<script src="assets/js/easing.js"></script>
<!-- Color JS -->
<script src="assets/js/colors.js"></script>
<!-- Popper JS -->
<script src="assets/js/popper.min.js"></script>
<!-- Bootstrap Datepicker JS -->
<script src="assets/js/bootstrap-datepicker.js"></script>
<!-- Jquery Nav JS -->
<script src="assets/js/jquery.nav.js"></script>
<!-- Slicknav JS -->
<script src="assets/js/slicknav.min.js"></script>
<!-- ScrollUp JS -->
<script src="assets/js/jquery.scrollUp.min.js"></script>
<!-- Niceselect JS -->
<script src="assets/js/niceselect.js"></script>
<!-- Tilt Jquery JS -->
<script src="assets/js/tilt.jquery.min.js"></script>
<!-- Owl Carousel JS -->
<!-- counterup JS -->
<script src="assets/js/jquery.counterup.min.js"></script>
<!-- Steller JS -->
<script src="assets/js/steller.js"></script>
<!-- Wow JS -->
<script src="assets/js/wow.min.js"></script>
<!-- Magnific Popup JS -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- Counter Up CDN JS -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>


</body>

</html>
