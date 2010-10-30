<?php

/**
 * Controller for a 'Hello World' example with theming.
 */
function controller($args) {
  $foo = t('Hello World!');

  $tpl = new Template();
  $tpl->add('main', 'blocks/hello', array('foo' => $foo));
  $tpl->setTPL('page');

  return $tpl->render();
}
