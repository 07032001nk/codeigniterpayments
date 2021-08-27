<?php

echo WELCOME;

if(MEMBER==NULL)
{
        ?>
        <br>
        <p>
                Not a member.
        </p>
        <p>
                <a href="/dashboard/user/<?=USER;?>/buy"><button>Buy course</button></a>
        </p>

        <?php
}

else
{
        echo "<br/> a member";
}