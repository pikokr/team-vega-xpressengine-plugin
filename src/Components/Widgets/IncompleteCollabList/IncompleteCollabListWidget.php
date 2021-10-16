<?php

namespace Pikokr\XePlugin\TeamVega\Components\Widgets\IncompleteCollabList;

use GuzzleHttp\Client;
use Pikokr\XePlugin\TeamVega\VegaUtils;
use Xpressengine\Widget\AbstractWidget;

class IncompleteCollabListWidget extends AbstractWidget
{
    /**
     * @inheritDoc
     */
    public function render()
    {
        $client = new Client();

        $res = $client->get(VegaUtils::getUrl('/api/v1/collabs'), [
            'headers' => [
                'Authorization' => VegaUtils::getConfig()->get('auth')
            ]
        ]);

        $body = json_decode($res->getBody(), true);

        return $this->renderSkin([
            'collabs' => $body
        ]);
    }
}