<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
    <style>
        body{
    margin: 0;
    padding: 0;
    background-image: url(img/pizzafondo.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    font-family: Tahoma, sans-serif;
    background-attachment: fixed;
}
.form-area{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 400px;
    height: 500px;
    box-sizing: border-box;
    background: rgba(0,0,0,0.5);
    padding: 40px;
}
h3{
    margin: 0;
    padding: 0;
    font-weight: bold;
    color: #ffffff;
}
.form-area p{
    margin: 0;
    padding: 0;
    font-weight: bold;
    color: #ffffff;
}
.form-area input,select{
    margin-bottom: 20px;
    width: 100%;
}
.form-area input[type=text],
.form-area input[type=password]{
    border: none;
    border-bottom: 1px solid #ffffff;
    background-color: transparent;
    outline: none;
    height: 40px;
    color: #ffffff;
    display: 16px;

}
::placeholder{
    color: #ffffff;
}
.form-area select{
    margin-top: 20px;
    padding: 10px 0;
}
.form-area input[type=submit]{
    border: none;
    height: 40px;
    outline: none;
    color: #ffffff;
    font-size: 15px;
    background-color: tomato;
    cursor: pointer;
    border-radius: 20px;
}
.form-area input[type=submit]:hover{
    background-color: cyan;
    color: #ffffff;

}
.form-area a{
    color: #ffffff;
    text-decoration: none;
    font-size: 14px;
    font-weight: bold;

}
    </style>
</head>

<body>
    <div class="form-area">
        <h3>Inicio de session</h3>
        <form action="">
            <p>Correo</p>
            <input type="text" name="" id="" placeholder="Ingresa tu correo">
            <p>Contraseña</p>
            <input type="password" name="" id="" placeholder="ingresa la contraseña">
            <p>Pregunta de seguridad</p>
            <select name="" id="">
                <option value="">
                
                </option>
                <option value="">
                Cual es el nombre de tu mama?
                </option>
                <option value="">
                Cual es el nombre de tu escuela?
                </option>
                <option value="">
                cual es el nombre de tu mascota?
                </option>
            </select>
            <p></p>
            <input type="text" name="" id="" placeholder="Respuesta">

            <input type="submit" value="Ingresa">
            <a href="a">olvidaste contraseña?</a>
        </form>
    </div>
</body>
</html>