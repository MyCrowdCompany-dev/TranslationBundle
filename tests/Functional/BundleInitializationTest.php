<?php

namespace MyCrowdCompany\TranslationBundle\tests\Functional;

class BundleInitializationTest extends BaseTestCase
{

    /**
     * @test
     */
    public function bundle_will_install_with_no_errors()
    {
        $client = static::createClient();
        $container = $client->getContainer();
        $container->get('mcchappyr.translation.service.loco');
        $container->get('mcchappyr.translation.service.blackhole');
        $container->get('mcchappyr.translation.service.filesystem');
    }


}
