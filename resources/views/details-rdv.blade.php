       <div class="card" id="TableSorterCard">
           <div class="card-header py-3">
               <div class="row table-topper align-items-center">
                   <div class="col-12 col-sm-5 col-md-6 text-left" style="margin: 0px;padding: 5px 15px;">
                       <p class="text-primary m-0 font-weight-bold" style="color: #343a40 !important;">Liste Des
                           Rendez-Vous</p>
                   </div>
               </div>
           </div>
           <div class="row">
               <div class="col-12">
                   <div class="table-responsive">

                       <table class="table table-striped table tablesorter" id="ipi-table">
                           <thead
                               style="color:white; background-color: #3467ef !important; border-color: #3467ef !important">
                               <tr>
                                   <th class="text-center">Nom</th>
                                   <th class="text-center">Prénom</th>
                                   <th class="text-center">Heure</th>
                                   <th class="text-center">Email</th>
                                   <th class="text-center">Téléphone</th>
                                   <th class="text-center">Déscription</th>
                               </tr>
                           </thead>
                           <tbody class="text-center">
                               <?php
                               $cx = new PDO('mysql:host=localhost;port=3312;dbname=dentaire;charset=utf8', 'root', '');
                               $nomComplet = '';
                               $tel = '';
                               // if (isset($_GET['sendRdv'])) {
                               // $dt = explode('/', $_GET['firstDate']);
                               // $nomComplet = $_GET['nomComplet'];
                               // $tel = $_GET['phone'];
                               // $date = $dt[2] . '-' . $dt[0] . '-' . $dt[1];
                               // $sql = "select nom,prenom,description,time_rdv,email,tel from rdvs where
                               // DATE(date_rdv)='$date' and tel like '$tel' and nom like '%$nomComplet%' or prenom like
                               // '%$nomComplet%' ORDER BY time_rdv";
                               // } else {
                               // $sql = "select nom,prenom,description,time_rdv,email,tel from rdvs where
                               // DATE(date_rdv)=CURDATE() and tel like '$tel' and nom like '%$nomComplet%' or prenom
                               // like '%$nomComplet%' ORDER BY time_rdv";
                               // }

                               $date = 'DATE(date_rdv)=CURDATE() ';
                               $nomComplet = '';
                               $tel = '';
                               if (isset($_GET['sendRdv'])) {
                            //    $nom = document . getElementById('nomComplet') . value;
                            //    echo $nom;
                               if (str_replace(' ', '', $_GET['firstDate']) != '') {
                               $dt = explode('/', $_GET['firstDate']);
                               $date = $dt[2] . '-' . $dt[0] . '-' . $dt[1];
                               $date = "DATE(date_rdv)='" . $date . "' ";
                               } else {
                               $date = 'DATE(date_rdv)=CURDATE() ';
                               }

                               if (str_replace(' ', '', $_GET['phone']) != '') {
                               $tel = str_replace(' ', '', $_GET['phone']);
                               $tel = " and tel ='" . $tel . "' ";
                               } else {
                               $tel = '';
                               }

                               if (str_replace(' ', '', $_GET['nomComplet']) != '') {
                               $nomComplet = str_replace(' ', '', $_GET['nomComplet']);
                               $nomComplet = " and (nom like '%$nomComplet%' or prenom like '%$nomComplet%') or
                               (concat(nom,prenom) like '%$nomComplet%' or concat(prenom,nom) like '%$nomComplet%')";
                               } else {
                               $nomComplet = '';
                               }
                               }

                               $sql = 'select nom,prenom,description,time_rdv,email,tel from rdvs where ' . $date . $tel
                               . $nomComplet;

                               $return = $cx->query($sql);

                               $i = 0;
                               while ($tab = $return->fetch()) {
                               $i++;
                               if ($i % 2 == 0) { ?>
                               <tr>
                                   <td><?php echo $tab['nom']; ?></td>
                                   <td><?php echo $tab['prenom']; ?></td>
                                   <td><?php echo $tab['time_rdv']; ?></td>
                                   <td><?php echo $tab['email']; ?></td>
                                   <td><?php echo $tab['tel']; ?></td>
                                   <td><?php echo $tab['description']; ?></td>
                               </tr>
                               <?php } else { ?>
                               <tr>
                                   <td><?php echo $tab['nom']; ?></td>
                                   <td><?php echo $tab['prenom']; ?></td>
                                   <td><?php echo $tab['time_rdv']; ?></td>
                                   <td><?php echo $tab['email']; ?></td>
                                   <td><?php echo $tab['tel']; ?></td>
                                   <td><?php echo $tab['description']; ?></td>
                               </tr>


                               <?php }
                               }
                               if ($i == 0) { ?>

                               <div class="alert alert-danger" role="alert">
                                   <h4 class="alert-heading">Attention!</h4>
                                   <p>les informations qui vous cherchez n'existe pas dans la liste de rendez-vous.</p>
                               </div>
                               <?php }
                               ?>
                           </tbody>
                       </table>
                   </div>
               </div>
           </div>
       </div>
