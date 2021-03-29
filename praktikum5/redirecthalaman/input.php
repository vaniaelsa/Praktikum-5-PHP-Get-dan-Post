<!DOCTYPE html>
<html>
    <head>
        <title>Input</title>
    </head>

    <body>
        <!-- method post untuk mengirimkan nilai yg diinput di form 
         ke halaman hasilkirim.php -->
        <form method="POST" action="hasilkirim.php">
            <table width="400" align="center" cellpadding="2" cellspacing="2">
                <tr>
                    <td width="130">Nama</td>
                    <!-- untuk menginput nama -->
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <!-- tombol untuk login -->
                        <input type="submit" name="btnLogin" value="Login">
                        <!-- tombol reset untuk mengembalikan keadaan form pada keadaan awal -->
                        <input type="reset" name="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
