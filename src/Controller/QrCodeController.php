<?php

namespace App\Controller;

use App\Entity\Identity;
use Endroid\QrCode\Response\QrCodeResponse;
use JeroenDesloovere\VCard\VCard;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\LabelAlignment;
use Symfony\Component\HttpFoundation\Response;
use Endroid\QrCode\ErrorCorrectionLevel;

class QrCodeController
{
    /**
     * @Route("/qrcode", name="qr_code")
     */
    public function index()
    {

//        $lastName = $data->getNama();
//        $additional = '';
//        $prefix = '';
//        $suffix = '';

//        $vcard->addName($lastName, $firstName, $additional, $prefix, $suffix);
//        $vcard->addNomorTelepon(1234121212, 'PREF;WORK');

        // -----------------------------------

//        $data = $this->getDoctrine()->getRepository(Identity::class)->findOneBy(['id' => 1]);
//        $text = "Name:".$data->getNama()."\n Jabatan: ". $data->getJabatan()."\n Perusahaan: ".$data->getPerusahaan()."\n No Telepon"
//            .$data->getNoTelepon()."\n Email: ".$data->getEmail()."\n No Telp Perusahaan: ".$data->getNoTeleponPerusahaan()."\n Email Perusahaan: "
//            .$data->getEmailPerusahaan();

//        return $this->render('qr_code/index.html.twig', [
//            'qrCode' => $response,
//        ]);
    }
}
