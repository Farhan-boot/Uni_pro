<form class="search" action="<?php echo home_url(); ?>/" method="get">
    <div class="input-group">
        <input name="s" id="s" type="text" class="form-control" placeholder="type your search" value="<?php the_search_query(); ?>">
        <span class="input-group-btn">
            <button class="btn btn-info" type="submit">&nbsp;<i class="fa fa-search"></i>&nbsp;</button>
        </span>
    </div>
</form>