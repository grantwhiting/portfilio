<?php

// Template Name: Home Page

$params = array(
    'limit' => -1
);

$skillPod = pods('skill', $params);
$jobPod = pods('work', $params);

get_header();
?>

<section class="content-section" id="about">
    <div class="content-section__inner">
        <h2>About Me</h2>
        <div class="about__inner">
            <img class="portrait" src="<?php echo get_stylesheet_directory_uri(); ?>/images/portrait.png" alt="Grant's photo" />
            <p>My name is Grant, welcome to my site! I am passionate about building good-looking, dynamic, and responsive websites. I have a lot of experience building the front-end of websites ranging from smaller blogs and static content sites to large-scale, complex applications with tons of data and content. For work examples, see the projects I've been apart of below.</p>
        </div>
    </div>
</section>

<section class="content-section grey" id="skills">
    <div class="content-section__inner">
        <h2>Skills</h2>
        <ul class="skills-list">
        <?php 
        if ($skillPod->total() > 0):
            while($skillPod->fetch()): 
            $skill = $skillPod->field('name'); ?>
            <li><?php echo $skill ?></li>
        <?php
            endwhile;
        endif; ?>
        </ul>
    </div>
</section>

<section class="content-section" id="work">
    <div class="content-section__inner">
        <h2>Projects</h2>
        <ul class="work-list">
            <?php 
            if ($jobPod->total() > 0): 
                while ($jobPod->fetch()):
                $job = $jobPod->field('site');
                $blurb = $jobPod->field('blurb');
                $thumbID = $jobPod->field('thumb.guid');
                $url = $jobPod->field("url"); ?>
                <li data-url="<?php echo $url; ?>" data-blurb="<?php echo $blurb; ?>" class="job-modal-trigger">
                    <img src="<?php echo $thumbID; ?>" alt="<?php echo $job; ?> thumbnail" />
                    <h3><?php echo $job; ?></h3>
                </li>
            <?php
                endwhile;
            endif; ?>
        </ul>
    </div>
</section>

<section class="content-section grey" id="contact">
    <div class="content-section__inner">
        <h2>Contact Info</h2>
        <a href="mailto:whiting.grant@gmail.com">whiting.grant@gmail.com</a>
        <p>(805) 550-3230</p>
    </div>
</section>

<?php get_footer(); ?>