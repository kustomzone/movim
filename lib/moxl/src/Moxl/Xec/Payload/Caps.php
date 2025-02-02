<?php

namespace Moxl\Xec\Payload;

use Moxl\Xec\Action\Disco\Request;

use App\Info;

class Caps extends Payload
{
    public function handle($stanza, $parent = false)
    {
        $node = $stanza->attributes()->node.'#'.$stanza->attributes()->ver;
        $to = (string)$parent->attributes()->from;

        if (!Info::whereNull('server')->where('node', $node)->first()
        && $parent->getName() != 'streamfeatures') {
            $d = new Request;
            $d->setTo($to)
              ->setNode($node)
              ->request();
        }
    }
}
