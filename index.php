<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal de Inventario Digital - Login</title>
    <style>
        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: white; 
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
            position: relative;
        }
        
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.3);
            backdrop-filter: blur(1px);
            z-index: -1;
            animation: fadeInOut 4s infinite;
        }

        @keyframes fadeInOut {
            0%, 100% { opacity: 0.3; }
            50% { opacity: 0.5; }
        }
        
        .login-container { 
            background: linear-gradient(135deg, rgba(255,255,255,0.1), rgba(0,0,0,0.9));
            padding: 30px 50px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 8px 32px rgba(31,38,135,0.37);
            backdrop-filter: blur(4px);
            border: 1px solid rgba(255,255,255,0.18);
            margin-bottom: 20px;
            transition: transform 0.3s ease;
            cursor: move;
        }
        
        .login-container h2 { 
            color: #00ff88;
            margin-bottom: 25px;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 24px;
            text-shadow: 0 0 10px rgba(0,255,136,0.5);
        }
        
        .input-group { 
            margin-bottom: 20px;
        }
        
        .input-group label { 
            display: block;
            margin-bottom: 8px;
            color: #00ff88;
            font-size: 14px;
            text-transform: uppercase;
        }
        
        .input-group input { 
            padding: 12px;
            width: 100%;
            border-radius: 8px;
            border: 2px solid #00ff88;
            background: rgba(0,0,0,0.7);
            color: white;
            transition: all 0.3s ease;
        }
        
        .input-group input:focus {
            outline: none;
            box-shadow: 0 0 15px rgba(0,255,136,0.3);
            transform: scale(1.02);
        }
        
        .submit-btn { 
            background: linear-gradient(45deg, #00ff88, #00ccff);
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            color: black;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .submit-btn:hover { 
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,255,136,0.4);
        }
        
        .branding {
            text-align: center;
            margin-top: 10px;
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        .inventario-text {
            font-size: 24px;
            color: #00ff88;
            letter-spacing: 5px;
            text-shadow: 0 0 10px rgba(0,255,136,0.5);
            margin: 5px 0;
            animation: glow 2s ease-in-out infinite;
        }

        .dni-text {
            font-size: 18px;
            color: #00ccff;
            letter-spacing: 10px;
            text-shadow: 0 0 10px rgba(0,204,255,0.5);
            margin: 0;
            animation: glow 2s ease-in-out infinite 0.5s;
        }

        @keyframes glow {
            0%, 100% {
                text-shadow: 0 0 10px rgba(0,255,136,0.5);
            }
            50% {
                text-shadow: 0 0 20px rgba(0,255,136,0.8),
                             0 0 30px rgba(0,255,136,0.6);
            }
        }
    </style>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const host = window.location.origin; // Obtiene 'http://localhost' o 'http://10.234.56.80'
        document.body.style.backgroundImage = `url('${host}/C/gif/Blue1.gif')`;

        // Configura el action del formulario de manera dinámica
        document.querySelector('form').action = `${host}/B/inicio.php`;
    });
</script>

</head>
<body>

<div class="login-container">
    <h2>Inicio de Sesión</h2>
    <form action="validar.php" method="post">
        <div class="input-group">
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" id="usuario" required>
        </div>
        <div class="input-group">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" required>
        </div>
        <button type="submit" class="submit-btn">Iniciar Sesión</button>
        <?php if (isset($_GET['error'])): ?>
            <p style="color: red;">Usuario o contraseña incorrectos.</p>
        <?php endif; ?>
    </form>
</div>

<div class="branding">
    <div class="inventario-text">INVENTARIO DIGITAL</div>
    <div class="dni-text">DNI</div>
</div>

</body>
</html>