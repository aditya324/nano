<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GestationalDiabetesConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Gestational Diabetes')],
            [
                'name' => 'Gestational Diabetes',
                'slug' => Str::slug('Gestational Diabetes'),
                'h1' => 'Gestational Diabetes',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Gestational diabetes is a type of diabetes that develops during pregnancy when the body is unable to effectively regulate blood sugar levels due to hormonal changes and increased insulin resistance. It commonly occurs during the second or third trimester and may affect both maternal and fetal health if not properly managed. Early diagnosis, blood sugar control, and appropriate prenatal care are essential to support a healthy pregnancy and reduce complications for both mother and baby.',
                'about_more' => '',
                'overview' => 'Gestational diabetes is a type of diabetes that develops during pregnancy when the body is unable to effectively regulate blood sugar levels due to hormonal changes and increased insulin resistance. It commonly occurs during the second or third trimester and may affect both maternal and fetal health if not properly managed. Early diagnosis, blood sugar control, and appropriate prenatal care are essential to support a healthy pregnancy and reduce complications for both mother and baby.',
                'symptoms' => [
            ['value' => 'Increased thirst and frequent urination'],
            ['value' => 'Fatigue or reduced energy levels'],
            ['value' => 'Increased hunger or excessive weight gain during pregnancy'],
            ['value' => 'Blurred vision or recurrent infections'],
            ['value' => 'In many cases, gestational diabetes may not cause noticeable symptoms and is detected through routine screening'],
        ],
                'causes' => [
            ['value' => 'Hormonal changes during pregnancy causing insulin resistance'],
            ['value' => 'Overweight or obesity before pregnancy'],
            ['value' => 'Family history of diabetes or previous gestational diabetes'],
            ['value' => 'Sedentary lifestyle and unhealthy dietary habits'],
            ['value' => 'Polycystic ovary syndrome (PCOS), advanced maternal age, or previous large-birth-weight baby'],
        ],
                'risks' => [
            ['value' => 'High birth weight (macrosomia) increasing delivery complications'],
            ['value' => 'Premature birth or respiratory problems in the newborn'],
            ['value' => 'Increased risk of high blood pressure or preeclampsia during pregnancy'],
            ['value' => 'Low blood sugar levels in the baby after birth'],
            ['value' => 'Increased future risk of Type 2 diabetes for both mother and child'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for gestational diabetes focuses on maintaining healthy blood sugar levels, supporting maternal and fetal health, and preventing pregnancy-related complications. Management may include healthy diet planning, blood sugar monitoring, regular physical activity, weight management, insulin therapy when required, and close prenatal supervision. Patients may also benefit from nutritional counseling, stress management, diabetes education, and regular obstetric and endocrinology follow-up throughout pregnancy to ensure safe maternal and fetal outcomes.'],
        ],
                'recovery' => 'The long-term outlook for gestational diabetes is generally positive with early diagnosis and proper pregnancy care. Blood sugar levels often return to normal after delivery, but women with gestational diabetes have a higher risk of developing Type 2 diabetes later in life. Healthy nutrition, regular exercise, weight management, postpartum diabetes screening, and continuous medical follow-up significantly help reduce long-term complications, support future pregnancies, and improve overall maternal health and well-being. __________________ 4. Diabetic Ketoacidosis (DKA) / Hyperosmolar Hyperglycemic State (HHS) Diabetic Ketoacidosis (DKA) / Hyperosmolar Hyperglycemic State (HHS)',
                'sort_order' => 3,
                'is_active' => true,
                'meta_title' => 'Gestational Diabetes',
                'meta_description' => 'Gestational diabetes is a type of diabetes that develops during pregnancy when the body is unable to effectively regulate blood sugar levels due to hormonal cha',
                'meta_keywords' => '',
            ]
        );
    }
}
