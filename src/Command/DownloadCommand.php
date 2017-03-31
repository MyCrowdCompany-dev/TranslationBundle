<?php

namespace MyCrowdCompany\TranslationBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * This command is good to run before you ship your code to production.
 */
class DownloadCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('mcchappyr:translation:download')
            ->setDescription('Replace your local files with the latest from your translation SaaS.');
    }
    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->getContainer()->get('mccmcchappyr.translation')->downloadAllTranslations();
        $output->writeln('Download complete');
    }
}
