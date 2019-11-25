<?php 
/*
*Template Name: Rank List
*/
get_header();
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/assets/css/card.css'; ?>">
<style>
ul.pagination li .page-numbers {
    border: 1px solid #ddd; /* Gray */
    background-color:#ffffff;
    margin: 0 4px;
    padding: 8px 16px;
    text-decoration: none;
    border-radius:10%;
}
ul.pagination .active .page-numbers {
    border: 1px solid #ddd; /* Gray */
    background-color:#007bff;
    color:#ffffff;
    margin: 0 4px;
    padding: 8px 16px;
    text-decoration: none;
    border-radius:10%;
}
</style>
        <div class="row">
            <div class="col w-100 d-md-none d-xl-none d-lg-none">
                 <!-- @include('menu.menu') -->
                 <?php include(get_template_directory().'/menu.php');?>
            </div>
        </div>


        <div class="my-aii-container">
            <div id="scrollbar-menu" class="sidebar sidenav my-aii-overflow d-none d-md-block d-lg-block d-xl-block">
                <!-- @include('menu.menu') -->
                <?php include(get_template_directory().'/menu.php');?>
                <div style="bottom:0;width:100%;position:absolute; font-size:0.8vw;">
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="http://www.facebook.com" class="blue-txt"><i class="fab fa-facebook-f"></i></a>&nbsp;&nbsp;
                    <a href="http://www.twitter.com" class="blue-txt"><i class="fab fa-twitter"></i></a>&nbsp;&nbsp;
                    <a href="http://www.instagram.com" class="blue-txt"><i class="fab fa-instagram"></i></a>&nbsp;&nbsp;
                    <p class="txt-googlesans-medium my-aii-copyright"> &nbsp;&nbsp;&nbsp;&nbsp;<sup>&copy;</sup>2019.All Rights Reserved</p>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </div>
            <div class="my-aii-about my-aii-overflow">
                <style>
                    .pagination {
                        text-align:center;  
                    }   
                </style>
                <div class="container-fluid" style="padding:2%;">
                    <p>&nbsp;</p>
                    <h1><?php the_title(); ?></h1>
                    <p>&nbsp;</p>
                    <?php
                        $result_per_page = 15;
                        $current = get_query_var('paged')?get_query_var('paged'):1;

                        global $seconddb;
                        $user = $seconddb->get_results("SELECT * from user_stat Join user on user.user_id = user_stat.user_id order by rank_id asc");
                        if(!empty($wp_query->query_vars['s'])):
                            $args['add_args'] = array('s'=>get_query_var('s'));
                        endif;
                        
                        $args = array(
                            'base'  =>  @add_query_arg('paged','%#%'),
                            'format'    =>  '',
                            'total' => ceil(sizeof($user)/$result_per_page),
                            'current'   =>  $current,
                            'show_all'  =>  false,
                            'type' => 'array',
                            'prev_text' => '&laquo;',
                            'next_text' => '&raquo;',
                        );
                        $start = ($current - 1) * $result_per_page;
                        $end = $start + $result_per_page;
                        $end = (sizeof($user) < $end) ? sizeof($rows) : $end;
                        $pagination = paginate_links($args); 
                        echo '<br />';
                        // global $seconddb;
                        // $user = $seconddb->get_results("SELECT * from user_stat Join user on user.user_id = user_stat.user_id order by rank_id asc");
                        // $current = max( 1, absint( get_query_var( 'paged' ) ) );
                        // $pagination = paginate_links( array(
                        //     'base' => str_replace( PHP_INT_MAX, '%#%', esc_url( get_pagenum_link( PHP_INT_MAX ) ) ),
                        //     'format' => '?paged=%#%',
                        //     'current' => $current,
                        //     'total' => $user->max_num_pages,
                        //     'type' => 'array',
                        //     'prev_text' => '&laquo;',
                        //     'next_text' => '&raquo;',
                        // ) ); 
                        // $start = ($current - 1) * $result_per_page;
                        // $end = $start + $result_per_page;
                        // $end = (sizeof($user) < $end) ? sizeof($rows) : $end;
                        // $pagination = paginate_links($args); 
                    ?>
                    <div style="overflow-x:auto;">
                        <table class="table">
                            <thead class="txt-googlesans-bold">
                                <tr>
                                    <th scope="col">Peringkat</th>
                                    <th scope="col">Character Name</th>
                                    <th scope="col">Poker Round</th>
                                    <th scope="col">Big Two Round</th>
                                    <th scope="col">Domino QQ Round</th>
                                    <th scope="col">Domino Susun Round</th>
                                    <th scope="col">Experience</th>
                                </tr>
                            </thead>
                            <tbody class="txt-googlesans-reguler">
                                <?php for($i=$start; $i < $end ;++$i) { ?>
                                <?php $usr =  $user[$i]; ?>
                                <tr>
                                    <th scope="row"><?php echo $usr->rank_id; ?></th>
                                    <td><?php echo $usr->username; ?></td> 
                                    <td><?php echo $usr->tpk_round; ?></td>
                                    <td><?php echo $usr->bgt_round; ?></td>
                                    <td><?php echo $usr->dmq_round; ?></td>
                                    <td><?php echo $usr->dms_round; ?></td>
                                    <td><?php echo $usr->exp; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <ul class="pagination pagination-rank" role="navigation">



                        <?php if ( ! empty( $pagination ) ) : ?>
                        <ul class="pagination">
                            <?php foreach ( $pagination as $key => $page_link ) : ?>
                                <li class="paginated_link<?php if ( strpos( $page_link, 'current' ) !== false ) { echo ' active'; } ?>"><?php echo $page_link ?></li>
                            <?php endforeach ?>
                        </ul>
                    <?php endif ?>
                    </ul>
                    <p>&nbsp;</p>
                </div>
            </div>
   

        </div>   
<?php get_footer(); ?>