<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PrimarySclerosingCholangitisBiliaryStricturesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Primary Sclerosing Cholangitis / Biliary Strictures')],
            [
                'name' => 'Primary Sclerosing Cholangitis / Biliary Strictures',
                'slug' => Str::slug('Primary Sclerosing Cholangitis / Biliary Strictures'),
                'h1' => 'Primary Sclerosing Cholangitis / Biliary Strictures',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Primary Sclerosing Cholangitis (PSC) is a chronic disease causing inflammation and scarring of the bile ducts, leading to narrowing (strictures) and blockage of bile flow. Biliary strictures may also occur due to surgery, infection, stones, or tumors.',
                'about_more' => '',
                'overview' => 'Primary Sclerosing Cholangitis (PSC) is a chronic disease causing inflammation and scarring of the bile ducts, leading to narrowing (strictures) and blockage of bile flow. Biliary strictures may also occur due to surgery, infection, stones, or tumors.',
                'symptoms' => [
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Jaundice (yellowing of skin and eyes)'],
            ['value' => 'Itching of the skin'],
            ['value' => 'Abdominal discomfort, especially in the upper abdomen'],
            ['value' => 'Fever and recurrent bile duct infections'],
        ],
                'causes' => [
            ['value' => 'Autoimmune bile duct inflammation'],
            ['value' => 'Inflammatory bowel disease association'],
            ['value' => 'Gallstones or previous bile duct surgery'],
            ['value' => 'Tumors causing bile duct compression'],
            ['value' => 'Recurrent infections or pancreatitis'],
        ],
                'risks' => [
            ['value' => 'Recurrent cholangitis (bile duct infection)'],
            ['value' => 'Liver cirrhosis and liver failure'],
            ['value' => 'Bile duct cancer (cholangiocarcinoma)'],
            ['value' => 'Vitamin deficiencies due to poor bile flow'],
            ['value' => 'Portal hypertension and ascites'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Liver function monitoring and imaging'],
            ['value' => 'ERCP with dilation or stenting of strictures'],
            ['value' => 'Antibiotics for infections'],
            ['value' => 'Symptom management for itching and jaundice'],
            ['value' => 'Liver transplantation in advanced disease'],
        ],
                'recovery' => 'PSC is usually progressive and requires long-term follow-up. Early treatment helps control symptoms and reduce complications.',
                'sort_order' => 21,
                'is_active' => true,
                'meta_title' => 'Primary Sclerosing Cholangitis / Biliary Strictures',
                'meta_description' => 'Primary Sclerosing Cholangitis (PSC) is a chronic disease causing inflammation and scarring of the bile ducts, leading to narrowing (strictures) and blockage of',
                'meta_keywords' => '',
            ]
        );
    }
}
