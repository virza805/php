
        <div class="row navbar">
            <div class="column column-60 column-offset-10">
                <ul>
                    <li><a href="/9-session/index.php?task=report">All Students</a></li>
                    <?php if(isAdmin() || isEditor()): ?>
                    <li><a href="/9-session/index.php?task=add">Add New Student</a></li>
                    <?php endif; ?>
                    <?php if(isAdmin()): ?>
                    <li><a href="/9-session/index.php?task=seed">Seed</a></li>
                    <?php endif; ?>
                    
                </ul>
            </div>
            <div class="column column-20">
                <ul>
                    <?php 
                    if(!$_SESSION['loggedin']):
                         ?>
                        <li><a href="/9-session/auth.php">Log In</a></li>
                    <?php 
                    else:
                         ?>
                        <li><a href="/9-session/auth.php?logout=true">Log Out (<?php echo $_SESSION['role'] ?>)
                        </a></li>
                    <?php 
                    endif;
                        ?>
                    
                </ul>
            </div>
        </div>