<?php
include_once '../models/m_user.php';
session_start();

$user = new m_user();

try { 
    if (isset($_GET['aksi'])) {
        $aksi = $_GET['aksi'];

        if ($aksi == 'tambah') {
            $username = $_POST['username'];
            $password = password_hash($_POST['pass'], PASSWORD_DEFAULT);
            $email = $_POST['email'];
            $no_telepon = $_POST['no_tlp'];
            $alamat = $_POST['alamat'];
            $role = $_POST['role'];

            $result = $user->tambah_data($username, $password, $email, $no_telepon, $alamat, $role);
            
            if ($result) {
                echo "<script>alert('Data Berhasil Ditambahkan');window.location='../view/v_tampil_data.php'</script>";
            } else {
                echo "<script>alert('Data gagal ditambahkan');window.location='../view/v_tampil_data.php'</script>";
            }
        }

        else if ($aksi == 'hapus') {
            if (isset($_GET['id_user'])) {
                $id = $_GET['id_user'];
                $result = $user->hapus_data($id);

                if ($result) {
                    echo "<script>alert('Data Berhasil Dihapus');window.location='../view/v_tampil_data.php'</script>";
                } else {
                    echo "<script>alert('Data gagal dihapus');window.location='../view/v_tampil_data.php'</script>";
                }
            } else {
                echo "<script>alert('Error: ID pengguna untuk dihapus tidak ditemukan');window.location='../view/v_tampil_data.php'</script>";
            }
        }

        else if ($aksi == 'edit') {
            if (isset($_GET['id_user'])) {
                $id = $_GET['id_user'];
                $users = $user->tampil_data_by_id($id);
                if (!empty($users)) {
                    require_once '../view/v_update_data.php';
                } else {
                    echo "<script>alert('Error: Data pengguna tidak ditemukan');window.location='../view/v_tampil_data.php'</script>";
                }
            } else {
                echo "<script>alert('Error: ID pengguna untuk diedit tidak ditemukan');window.location='../view/v_tampil_data.php'</script>";
            }
        }

        else if ($aksi == 'update') {
            if (isset($_POST['id_user'])) {
                $id = $_POST['id_user']; 
                $username = $_POST['username'];
                $email = $_POST['email'];
                $no_telepon = $_POST['no_tlp']; 
                $alamat = $_POST['alamat'];
                $role = $_POST['role'];

                $result = $user->update_data($id, $username, $email, $no_telepon, $alamat, $role); 
                    
                if ($result) {
                    echo "<script>alert('Data Berhasil Diupdate');window.location='../view/v_tampil_data.php'</script>"; 
                } else {
                    echo "<script>alert('Data gagal Diupdate');window.location='../view/v_update_data.php'</script>";
                }
            }
        }
    } else {
        $users = $user->tampil_data();
       // require_once '../view/v_tampil_data.php'; 
    }
} catch (Exception $e) {
    echo $e->getMessage();
}

?>