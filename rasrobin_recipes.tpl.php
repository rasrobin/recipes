<?php

/**
 * @file
 * Default theme implementation to display a recipe.
 *
 * - $title:
 * - $author_name:
 * - $author_email:
 * - $description:
 * - $instructions:
 * - $ingredients:
 * - $created_on:
 */
?>
<div class="recipe">
  <ul>
    <li><?= $title ?></li>
    <li><?= $author_name ?></li>
    <li><?= $author_email ?></li>
    <li><?= nl2br($description) ?></li>
    <li><?= nl2br($instructions) ?></li>
    <li><?= nl2br($ingredients) ?></li>
    <li><?= format_date($created_on, $type = 'long', $format = '') ?></li>
  </ul>
</div>
