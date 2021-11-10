<style>
    @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@400;500&display=swap');
    .space
    {
        font-size: 24px;
        font-weight: 500;
        font-family: Raleway;
        text-align: center;
    }
    .spf
    {
        font-size: 22px;
        font-weight: 400;
        font-family: Raleway;
        text-align: center;
        padding-top: 5px;
        padding-bottom: 50px;
    }
</style>
<p class="space"> Welcome to our Home <br></p>
<p class="spf">
    I'm Yutthana Piyawongwatthana 6220500709
</p>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
<div class="cardBox">
                    
                    <div class="card">
                        <div>
                            <div class="numbers counter" data-target="<?php echo "$CheckAllO"?>">0</div>
                            <div class="cardName">AllObjects</div>
                        </div>
                        <div class="iconBx">
                            <ion-icon name="bag-outline"></ion-icon>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div>
                            <div class="numbers counter" data-target="<?php echo "$CheckAllD"?>">0</div>
                            <div class="cardName">AllDailyLog</div>
                        </div>
                        <div class="iconBx">
                            <ion-icon name="calendar-clear-outline"></ion-icon>
                        </div>
                    </div>

                    <div class="card">
                        <div>
                            <div class="numbers counter" data-target="<?php echo "$CheckAllN"?>">0</div>
                            <div class="cardName">AllNecessaryObject</div>
                        </div>
                        <div class="iconBx">
                            <ion-icon name="cart-outline"></ion-icon>
                        </div>
                    </div>

                    <div class="card">
                        <div>
                            <div class="numbers counter" data-target="<?php echo "$CheckQuantity"?>">0</div>
                            <div class="cardName">AllQuantity</div>
                        </div>
                        <div class="iconBx">
                            <ion-icon name="albums-outline"></ion-icon>
                        </div>
                    </div>


                </div>

                <div class="details">
                    <div class="recentOrders">
                        <div class="cardHeader">
                            <h2>Recent DailyLog</h2>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <td> ID </td> 
                                    <td> Date </td>  
                                    <td> Colour </td> 
                                    <td> Illness </td>
                                    <td> Home Isolation ID </td>
                                    <td> People Name </td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach($dailyloglist as $dailylogas){
                                        echo "
                                            <tr>
                                                <td>$dailylogas->DLOGid</td>
                                                <td>$dailylogas->DLOGdate</td>
                                                <td>$dailylogas->DLOGcolour</td>
                                                <td>$dailylogas->DLOGillness</td>
                                                <td>$dailylogas->HIid</td>
                                                <td>$dailylogas->PPname</td>
                                            </tr>";
                                        }
                                        echo "</table>";
                                ?>
                            </tbody>
                        </table>
                    </div>

            </div>
                <script>
                const counters = document.querySelectorAll('.counter');
                const speed = 2000;
                
                counters.forEach(counter => {
	                const updateCount = () => {
		                const target = +counter.getAttribute('data-target');
		                const count = +counter.innerText;

		                const inc = target / speed;

		                if (count < target) {
			                counter.innerText = Math.ceil(count + inc);
			                setTimeout(updateCount, 40);
		                } else {
			                counter.innerText = target;
		                }
	                };

	                updateCount();
                });
            </script>
                </body>
</html>