<?php $this->load->view('partials/header') ?>

    <div class="main-container">
        <h1>Ninja Gold Game</h1>
        <div class="interface">
            <h2>Your Gold: <?=$this->session->userdata('gold')?></h2>

            <form action="/process_money" method="post">
                <input type="hidden" name="action" value="farm">
                <h3>Farm</h3>
                <h4>(earns 10-20 golds)</h4>
                <input type="submit" value="Find Gold!">
            </form>

            <form action="/process_money" method="post">
                <input type="hidden" name="action" value="cave">
                <h3>Cave</h3>
                <h4>(earns 5-10 golds)</h4>
                <input type="submit" value="Find Gold!">
            </form>

            <form action="/process_money" method="post">
                <input type="hidden" name="action" value="house">
                <h3>House</h3>
                <h4>(earns 2-5 golds)</h4>
                <input type="submit" value="Find Gold!">
            </form>

            <form action="/process_money" method="post">
                <input type="hidden" name="action" value="casino">
                <h3>Casino</h3>
                <h4>(earns/takes 0-50 golds)</h4>
                <input type="submit" value="Find Gold!">
            </form>

        </div>
        <h2>Activities:</h2>
        <div class="activities">
<?php
        //var_dump($this->activities);
        //var_dump($this->session);
        $act=$this->session->userdata('all_activities');
           for($i=0;$i<count($act);$i++){?>
               <p><?=$this->session->userdata('all_activities')[$i]?></p>
<?php           }
        
?>
        </div>
    </div>
<?php $this->load->view('partials/footer') ?>