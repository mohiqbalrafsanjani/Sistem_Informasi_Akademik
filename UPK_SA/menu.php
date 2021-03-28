 <?php
 
session_start();
 
if ($_SESSION['status'] == "admin")
{
    // tampilkan menu untuk admin
    echo  "  <div class='collapse navbar-collapse main-navbar-collapse'>
                            <ul class='nav navbar-nav navbar-right'>                                
                                <li class='dropdown'>
                                    <a href='#' class='dropdown-toggle' data-hover='dropdown'>Input Data <b class='caret'></b></a>
                                    <ul class='dropdown-menu'>
                                        <li><a href='index.php?page=3'>Guru</a></li>
										<li><a href='index.php?page=21'>Kelas</a></li>
                                        <li><a href='index.php?page=0'>Kompetensi Keahlian</a></li>
                                        <li><a href='index.php?page=9'>Mata Diklat</a></li>                                        
                                        <li><a href='index.php?page=18'>Nilai</a></li>
                                        <li><a href='index.php?page=6'>Siswa</a></li>
										<li><a href='index.php?page=15'>Standar Kompetensi</a></li>
										<li><a href='index.php?page=12'>Wali Murid</a></li>										
                                    </ul>
                                </li>
								<li class='dropdown'>
                                    <a href='#' class='dropdown-toggle' data-hover='dropdown'>lihat Data <b class='caret'></b></a>
                                    <ul class='dropdown-menu'>
                                        
                                        <li><a href='index.php?page=4'>Guru</a></li>
										<li><a href='index.php?page=22'>Kelas</a></li>
                                        <li><a href='index.php?page=1'>Kompetensi Keahlian</a></li>
                                        <li><a href='index.php?page=10'>Mata Diklat</a></li>
                                        
                                        <li><a href='index.php?page=19'>Nilai</a></li>
                                        <li><a href='index.php?page=7'>Siswa</a></li>
										<li><a href='index.php?page=16'>Standar Kompetensi</a></li>
										<li><a href='index.php?page=13'>Wali Murid</a></li>
										
                                    </ul>
                                </li>
								<li class='dropdown'>
                                    <a href='#' role='button' class='dropdown-toggle' data-hover='dropdown'> <i class='glyphicon glyphicon-user'></i> $_SESSION[status] <i class='caret'></i></a>
                                    <ul class='dropdown-menu'>
                                        <li><a href='index.php?page='>Action</a></li>
                                        <li><a href='index.php?page='>Another action</a></li>
                                        <li><a href='index.php?page='>Something else here</a></li>
                                        <li role='presentation' class='divider'></li>
                                        <li><a href='logout.php'>Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
            ";
}

else if ($_SESSION['status'] == "guru")
{
    // tampilkan menu untuk user biasa
    echo "<div class='collapse navbar-collapse main-navbar-collapse'>
                            <ul class='nav navbar-nav navbar-right'>                                
                                <li class='dropdown'>
                                    <a href='#' class='dropdown-toggle' data-hover='dropdown'>Input Data <b class='caret'></b></a>
                                    <ul class='dropdown-menu'>
                                        <li><a href='#'>Guru</a></li>
                                        <li><a href='#'>Kompetensi Keahlian</a></li>
                                        <li><a href='#'>Mata Diklat</a></li>                                        
                                        <li><a href='#'>Nilai</a></li>
                                        <li><a href='#'>Siswa</a></li>
										<li><a href='#'>Standar Kompetensi</a></li>
										<li><a href='#'>Wali Murid</a></li>										
                                    </ul>
                                </li>
								<li class='dropdown'>
                                    <a href='#' class='dropdown-toggle' data-hover='dropdown'>lihat Data <b class='caret'></b></a>
                                    <ul class='dropdown-menu'>
                                        
                                        <li><a href='#'>Guru</a></li>
                                        <li><a href='#'>Kompetensi Keahlian</a></li>
                                        <li><a href='#'>Mata Diklat</a></li>
                                        
                                        <li><a href='#'>Nilai</a></li>
                                        <li><a href='#'>Siswa</a></li>
										<li><a href='#'>Standar Kompetensi</a></li>
										<li><a href='#'>Wali Murid</a></li>
										
                                    </ul>
                                </li>
								<li class='dropdown'>
                                    <a href='#' role='button' class='dropdown-toggle' data-hover='dropdown'> <i class='glyphicon glyphicon-user'></i> Username <i class='caret'></i></a>
                                    <ul class='dropdown-menu'>
                                        <li><a href='index.php?page=0'>Action</a></li>
                                        <li><a href='#'>Another action</a></li>
                                        <li><a href='#'>Something else here</a></li>
                                        <li role='presentation' class='divider'></li>
                                        <li><a href='logout.php'>Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div> ";
}
else if ($_SESSION['status'] == "siswa")
{
    // tampilkan menu untuk user biasa
    echo "<div class='collapse navbar-collapse main-navbar-collapse'>
                            <ul class='nav navbar-nav navbar-right'>                                
                                <li class='dropdown'>
                                    <a href='#' class='dropdown-toggle' data-hover='dropdown'>Input Data <b class='caret'></b></a>
                                    <ul class='dropdown-menu'>
                                        <li><a href='#'>Guru</a></li>
                                        <li><a href='#'>Kompetensi Keahlian</a></li>
                                        <li><a href='#'>Mata Diklat</a></li>                                        
                                        <li><a href='#'>Nilai</a></li>
                                        <li><a href='#'>Siswa</a></li>
										<li><a href='#'>Standar Kompetensi</a></li>
										<li><a href='#'>Wali Murid</a></li>										
                                    </ul>
                                </li>
								<li class='dropdown'>
                                    <a href='#' class='dropdown-toggle' data-hover='dropdown'>lihat Data <b class='caret'></b></a>
                                    <ul class='dropdown-menu'>
                                        
                                        <li><a href='#'>Guru</a></li>
                                        <li><a href='#'>Kompetensi Keahlian</a></li>
                                        <li><a href='#'>Mata Diklat</a></li>
                                        
                                        <li><a href='#'>Nilai</a></li>
                                        <li><a href='#'>Siswa</a></li>
										<li><a href='#'>Standar Kompetensi</a></li>
										<li><a href='#'>Wali Murid</a></li>
										
                                    </ul>
                                </li>
								<li class='dropdown'>
                                    <a href='#' role='button' class='dropdown-toggle' data-hover='dropdown'> <i class='glyphicon glyphicon-user'></i> Username <i class='caret'></i></a>
                                    <ul class='dropdown-menu'>
                                        <li><a href='index.php?page=0'>Action</a></li>
                                        <li><a href='#'>Another action</a></li>
                                        <li><a href='#'>Something else here</a></li>
                                        <li role='presentation' class='divider'></li>
                                        <li><a href='logout.php'>Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div> ";
}
?>