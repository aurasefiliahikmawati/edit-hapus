<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Pendaftaran</title>
</head>
<body>
    <header>
        <h3>TABEL PENDAFTARAN</h3>
    </header>
    <form action="proses-pendaftaran.php" method="POST">
        <fieldset>
            <p>
                <label for="nama">Nama Lengkap :</label>
                <input type="text" name="nama" />
            </p>
            <p>
                <label for="tempat">Tempat Lahir :</label>
                <input type="text" name="tempat" />
            </p>
            <p>
                <label for="tanggal">Tanggal Lahir :</label>
                <input type="date" name="tanggal" />
            </p>
            <p>
                <label for="alamat">Alamat : </label>
                <input type="textarea" name="alamat" />
            </p>
            <p>
                <label for="jk">Jenis Kelamin :</label>
                <label><input type="radio" name="jk" value="laki-laki" />Laki - Laki</label>
                <label><input type="radio" name="jk" value="perempuan" />Perempuan</label>
            </p>
            <p>
                <label for="agama">Agama : </label>
                <select name="agama">
                    <option value="-----">-----</option>
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="katolik">Katolik</option>
                    <option value="hindu">Hindu</option>
                    <option value="budha">Budha</option>
                </select>
            </p>
            <p>
            <input type="submit" value="Daftar" name="daftar" />
            </p>
        </fieldset>
    </form>
</body>
</html>