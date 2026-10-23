/* =========================================
   RESET & GLOBAL STYLES
   ========================================= */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
    background-color: #f0f2f5;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    color: #333;
}

/* =========================================
   STYLE UNTUK HALAMAN LOGIN (login.php)
   ========================================= */
.login-container {
    background: #ffffff;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
}

.login-container h2 {
    text-align: center;
    margin-bottom: 25px;
    color: #2c3e50;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    font-size: 14px;
    color: #555;
}

.form-group input {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 14px;
    transition: all 0.3s ease;
}

.form-group input:focus {
    border-color: #3498db;
    outline: none;
    box-shadow: 0 0 5px rgba(52, 152, 219, 0.3);
}

.btn {
    width: 100%;
    padding: 12px;
    background-color: #3498db;
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: background 0.3s ease;
}

.btn:hover {
    background-color: #2980b9;
}

.error-message {
    color: #e74c3c;
    background-color: #fadbd8;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 20px;
    text-align: center;
    font-size: 14px;
}

/* =========================================
   STYLE UNTUK HALAMAN DASHBOARD (dashboard.php)
   ========================================= */
.dashboard-container {
    background: #ffffff;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 600px;
    text-align: center;
}

.dashboard-container h1 {
    color: #2c3e50;
    margin-bottom: 10px;
}

.dashboard-container p {
    color: #666;
    margin-bottom: 25px;
    font-size: 16px;
}

.btn-logout {
    display: inline-block;
    padding: 10px 20px;
    background-color: #e74c3c;
    color: white;
    text-decoration: none;
    border-radius: 6px;
    font-weight: bold;
    transition: background 0.3s ease;
}

.btn-logout:hover {
    background-color: #c0392b;
}