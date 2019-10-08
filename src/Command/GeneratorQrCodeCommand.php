<?php

namespace App\Command;

use App\Repository\IdentityRepository;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\LabelAlignment;
use Endroid\QrCode\QrCode;
use JeroenDesloovere\VCard\VCard;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\HttpFoundation\Response;



class GeneratorQrCodeCommand extends Command
{
    protected static $defaultName = 'GeneratorQrCode';

    private $identityRepository;

    function __construct(IdentityRepository $identityRepository)
    {
        parent::__construct(IdentityRepository::class);
       $this->identityRepository = $identityRepository;
    }

    protected function configure()
    {
        $this
            ->setDescription('Add a short description for your command')
            ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
            $datas = $this->identityRepository->findAll();
            foreach ($datas as $data){
                $vcard = new VCard();
                $firstName = $data->getNama();
                $vcard->addName($firstName);
                $vcard->addPerusahaan($data->getPerusahaan());
                $vcard->addJabatan($data->getJabatan());
                $vcard->addEmail($data->getEmail(), 'HOME');
                $vcard->addEmail($data->getEmailPerusahaan(),'PREF;WORK');
                $vcard->addNomorTelepon($data->getNoTelepon(), 'CELL');
                $vcard->addNomorTelepon($data->getNoTeleponPerusahaan(), 'WORK');

                $qrCode = new QrCode($vcard->getOutput());
                $qrCode->setWriterByName('png');
                $qrCode->setMargin(10);
                $qrCode->setEncoding('UTF-8');
                $qrCode->setErrorCorrectionLevel(new ErrorCorrectionLevel(ErrorCorrectionLevel::HIGH()));
                $qrCode->setForegroundColor(['r' => 0, 'g' => 0, 'b' => 0]);
                $qrCode->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255]);
                $qrCode->setLabel($data->getNama().' | '.$data->getNIK(), 16, __DIR__ . '/../../public/assets/fonts/noto_sans.otf', LabelAlignment::CENTER);
                $qrCode->setLogoPath(__DIR__ . '/../../public/assets/images/logoIDX.jpg');
                $qrCode->setValidateResult(false);

                header('Content-Type: '.$qrCode->getContentType());
                $qrCode->writeFile(__DIR__ . '/../../storage/'. $data->getEmail() .'.png');

                $output->write("Generating QR Code " . $data->getNama() . "\n");
               // print ("Generating QR Code " . $data->getNama());
            }

    }
}
