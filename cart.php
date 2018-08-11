<?php require 'inc/head.php';?>
<section class="cookies container-fluid">
    <div class="row">
      <h2>Votre Pannier</h2>
      <section class="cookies container-fluid">
            <p>Résumé de vos achats</p>
            <table class="table">
                <thead>
                <tr>
                    <th>Article</th>
                    <th>Nombre</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    if (empty($_COOKIE["panier"])) : ?>
                <tr>
                    <td>Vous n'avez pas d'article!</td>
                </tr>

                    <?php else : ?>
                        <?php if (!empty($_COOKIE['panier']['pecanNuts'])) : ?>
                        <tr>
                            <td>Pecan Nuts</td>
                            <td><?= $_COOKIE['panier']['pecanNuts'] ?></td>
                        </tr>
                        <?php endif; ?>
                        <?php if (!empty($_COOKIE['panier']['chocolateChips'])) : ?>
                            <tr>
                                <td>Chocolate Chips</td>
                                <td><?= $_COOKIE['panier']['chocolateChips'] ?></td>
                            </tr>
                        <?php endif; ?>
                        <?php if (!empty($_COOKIE['panier']['chocolateCookie'])) : ?>
                            <tr>
                                <td>Chocolate Cookie</td>
                                <td><?= $_COOKIE['panier']['chocolateCookie'] ?></td>
                            </tr>
                        <?php endif; ?>
                        <?php if (!empty($_COOKIE['panier']['mmsCookies'])) : ?>
                            <tr>
                                <td>M&ms Cookie</td>
                                <td><?= $_COOKIE['panier']['mmsCookies'] ?></td>
                            </tr>
                        <?php endif; ?>

                    <?php endif; ?>
                </tbody>
            </table>
</section>
      TODO : Display shopping cart items from $_SESSION here.
    </div>
</section>
<?php require 'inc/foot.php'; ?>
