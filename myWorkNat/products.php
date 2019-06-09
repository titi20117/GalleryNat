<?PHP 
	header("Content-Type: text/html; charset=utf-8");
?>
<?PHP
    require_once './proj/login.php'; 
    $conn = new mysqli ($hn, $un, $pw, $db); 
    if ($conn->connect_error) die($conn->connect_error); 
    mysqli_set_charset($conn,"utf8"); 
    $query = "SELECT * FROM pictures"; 
    $result = $conn->query($query); 
    if (!$result) die ($conn->error);
    $rows = $result->num_rows;
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>mirkartin62</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="./Style_Awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="./products.css">
    
    </head>
    <body>
        <div class="products">
            <div class="registration">
                <button type="button" class="btn btn-success registration__client" data-toggle="modal" data-target="#exampleModal">Регистрация</button>
                <button type="button" class="btn btn-info registration__connect" data-toggle="modal" data-target="#modalEnter">Войти</button>
            </div>

            <div class="modal fade" id="modalEnter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Воити</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="inputMail">Электронная почта</label>
                                <input type="email" class="form-control" id="inputMail" placeholder="Еmail">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Пароль</label>
                                <input type="password" class="form-control" id="inputPassword" placeholder="Пароль">
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>        

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Регистрация</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                        <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Имя</label>
                            <input type="text" class="form-control" id="name" placeholder="Натали">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="surname">Фамилия</label>
                            <input type="text" class="form-control" id="surname" placeholder="Раковец">
                        </div>
                        </div>
                        <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Пароль</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="пароль">
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="inputAddress">Адрес</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Циольковского 5">
                        </div>
                        <div class="form-group">
                        <label for="inputAddress2">адрес 2</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Гагарина 59">
                        </div>
                        <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Город</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">Область</label>
                            <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>Рязаньская область</option>
                            <option>Московская область</option>
                            <option>Тульская область</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputZip">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    </div>
                    </div>
                </div>
            </div>
            
            <div class="row products-header">
                <ul class="row products-header__list">
                    <a href="http://"><li>Информация и сервис</li></a>
                    <a href="http://"><li>О нас</li></a>
                    <a href="http://"><li>Доставка</li></a>
                    <a href="http://"><li>Контакты</li></a>
                </ul>
                <div class="active-cyan-3 active-cyan-4 mb-4 products-header__search">
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                </div>
                <div class="products-header__shop-cart">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </div>
            </div>
            <div class="products-content">
                <div class="products-content__sidebar">
                    <div style="margin: 30px">
                            <div class="products-content__sidebar__category"><span>Цветы</span></div>
                            <hr>
                            <div class="products-content__sidebar__category"><span>Животные</span></div>
                            <hr>
                            <div class="products-content__sidebar__category"><span>Природа</span></div>
                            <hr>
                            <div class="products-content__sidebar__category"><span>Город</span></div>
                    </div>
                    
                </div>
                <div class="products-content__section">
                ';
                for ($j = 0 ; $j < $rows ; ++$j) {
                    $result->data_seek($j);
                    $row = $result->fetch_array(MYSQLI_ASSOC);
                    echo '
                        <div class="products-content__section-container">
                            <div class="products-content__section__img">
                                <img src="'.$row["src"].'" alt="src" srcset="">
                            </div>
                            <div class="products-content__section-attribut">
                                <div class="products-content__section__name">
                                    <span>'.$row["name"].'</span>
                                </div>
                                <div class="products-content__section__size">
                                    <span>Размер : </span><span>'.$row["size"].'</span>
                                </div>
                                <div class="products-content__section__price">
                                    <span>Цена : </span><span>'.$row["price"].'</span>
                                </div>
                            </div>
                        </div>
                        ';               
                }
                echo'
                <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div style="margin:0" class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body modal-body__image">
                        <img src="" alt="element" srcset="">
                    </div>
                    </div>
                </div>
            </div>        
                </div>
            </div>
            <div class="products-footer">
            <footer class="page-footer font-small blue pt-4">

            <!-- Footer Links -->
            <div class="container-fluid text-center text-md-left">
          
              <!-- Grid row -->
              <div class="row">
          
                
                
                <div class="col-md-3 mb-md-0 mb-3">
          
                  <!-- Links -->
                  <h5 class="text-uppercase">Links</h5>
          
                  <ul class="list-unstyled">
                    <li>
                      <a href="#!">Facebook</a>
                    </li>
                    <li>
                      <a href="#!">Twitter</a>
                    </li>
                    <li>
                      <a href="#!">Instragram</a>
                    </li>
                    <li>
                      <a href="#!">Vkontake</a>
                    </li>
                  </ul>
          
                </div>
                <!-- Grid column -->
          
                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">
          
                  <!-- Links -->
                  <h5 class="text-uppercase">Links</h5>
          
                  <ul class="list-unstyled">
                    <li>
                      <a href="#!">Gmail</a>
                    </li>
                    <li>
                      <a href="#!">Yandex</a>
                    </li>
                    <li>
                      <a href="#!">Ramber</a>
                    </li>
                    <li>
                      <a href="#!">88888888888</a>
                    </li>
                  </ul>
          
                </div>
                <!-- Grid column -->
          
              </div>
              <!-- Grid row -->
          
            </div>
            <!-- Footer Links -->
          
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2019 Copyright:
              <a href=""> Натали Раковец</a>
            </div>
            <!-- Copyright -->
          
          </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="./original.js"></script>            
    </body>
    </html>';
?>
