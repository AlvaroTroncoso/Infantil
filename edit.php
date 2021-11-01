<?php include("video.php"); ?>

<?php include('templates/header.php'); ?>

<header class="masthead">
            <div class="container">
                <div class="masthead-subheading">¡Bienvenido!</div>
                <div class="masthead-heading text-uppercase">Estudia Conmigo</div>
                
            </div>
        </header>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href=""><img src="" alt="" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="admin.php">Inicio</a></li>
                       
                        

                    </ul>
                    
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        
<main>

    <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

    <form action="recibeVideo.php" method="POST">
        <div class="form-group">
            <input  name="titulo" placeholder="t&iacute;tulo"/>
            </div>
        <div class="form-group">
           <textarea name="url" rows="2" class="form-control" placeholder="url"></textarea>
         </div>
        <div class="form-group">
            <input  name="descripcion" placeholder="Descripci&oacute;n"/>
            </div>
            <input type="submit" name="guardar" value="guardar" />
    </form>

    <div class="col-md-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>T&iacute;tulo</th>
              <th>url</th>
            <th>Descripci&oacute;n</th>
            <th>fecha</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

            <?php 
            require("video.php");
            $sqlVideo   = ("SELECT * FROM video ORDER BY id DESC");
            $queryVideo = mysqli_query($conn, $sqlVideo);

            ?>

          <?php
                         
        while ($dataVideo = mysqli_fetch_array($queryVideo)) { ?>
        <tr>
          <td><?php  echo $dataVideo['titulo']; ?></td>
          <td>
            <iframe width="253" height="200" src="<?php echo $dataVideo['url']; ?>"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </td>
            <td><?php  echo $dataVideo['descripcion']; ?></td>
            <td><?php  echo $dataVideo['fecha']; ?></td>
                
                <td>
                    <a href="editcont.php?id=<?php echo $dataVideo['id']?>" class="btn btn-secondary">
                        <i class="fas fa-marker"></i>
                    </a>
                    <a href="eliminar.php?id=<?php echo $dataVideo['id']?>" class="btn btn-danger">
                        <i class="far fa-trash-alt"></i>
                    </a>
                </td>
            </tr>
            
          <?php } ?>
            
        </tbody>
      </table>
    </div>
    



</main>

<?php include('templates/footer.php'); ?>

