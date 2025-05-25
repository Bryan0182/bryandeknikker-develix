<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'generate:sitemap';
    protected $description = 'Genereer automatisch een sitemap vanuit de live website';

    public function handle()
    {
        $this->info('Sitemap genereren...');

        Sitemap::create()
            ->add(Url::create('/'))
            ->add(Url::create('/contact'))
            ->add(Url::create('/over-develix'))
            ->add(Url::create('/diensten'))
            ->add(Url::create('/diensten/website'))
            ->add(Url::create('/diensten/seo'))
            ->add(Url::create('/diensten/social-media'))
            ->add(Url::create('/diensten/design'))
            ->add(Url::create('/diensten/hosting'))
            ->add(Url::create('/diensten/applicatie'))
            ->add(Url::create('/over-develix'))
            ->add(Url::create('/blog'))
            ->add(Url::create('/blog/waarom-een-professionele-website-essentieel-is-voor-jouw-bedrijf'))
            ->add(Url::create('/blog/5-simpele-seo-tips-om-je-vindbaarheid-te-verbeteren'))
            ->add(Url::create('/blog/hoe-gebruik-je-social-media-om-jouw-websiteverkeer-te-vergroten'))
            ->add(Url::create('/blog/wat-maakt-een-goed-website-design'))
            ->add(Url::create('/blog/de-eerste-stappen-naar-een-sterke-online-aanwezigheid'))
            ->add(Url::create('/blog/webdesigntrends-voor-2025-zo-maak-je-een-website-die-echt-converteert'))
            ->add(Url::create('/blog/waarom-is-een-seo-strategie-belangrijk-voor-jouw-bedrijf'))
            ->add(Url::create('/blog/de-kracht-van-storytelling-op-social-media-zo-maak-je-echt-impact'))
            ->add(Url::create('/blog/hoe-kleuren-jouw-klanten-beinvloeden'))
            ->add(Url::create('/blog/hoe-houd-je-jouw-website-veilig-tegen-hackers'))
            ->add(Url::create('/blog/hoe-technologie-jouw-bedrijf-kan-laten-groeien-slimme-innovaties-voor-ondernemers'))
            ->add(Url::create('/blog/het-verschil-tussen-maatwerk-websites-en-wordpress-websites-wat-past-bij-jou'))
            ->add(Url::create('/locatie/reeuwijk'))
            ->add(Url::create('/locatie/gouda'))
            ->add(Url::create('/locatie/waddinxveen'))
            ->add(Url::create('/locatie/bodegraven'))
            ->add(Url::create('/locatie/groene-hart'))
            ->add(Url::create('/locatie/alphen-aan-de-rijn'))
            ->add(Url::create('/locatie/boskoop'))
            ->add(Url::create('/locatie/zoetermeer'))
            ->add(Url::create('/locatie/benthuizen'))
            ->add(Url::create('/locatie/bleiswijk'))
            ->add(Url::create('/missie-visie'))
            ->add(Url::create('/klantbeoordelingen'))
            ->add(Url::create('/privacybeleid'))
            ->add(Url::create('/cookiebeleid'))
            ->add(Url::create('/algemene-voorwaarden'))
            ->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap succesvol gegenereerd!');
    }
}
