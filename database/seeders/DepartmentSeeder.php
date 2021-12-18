<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $input = [
            ['title' => 'Aerospace Medicine'],
            ['title' => 'Allergist / Immunologists'],
            ['title' => 'Anaesthesia'],
            ['title' => 'Bariatric Surgery'],
            ['title' => 'Cardiology - Interventional'],
            ['title' => 'Cardiology - Non Interventional'],
            ['title' => 'Cardiothoracic & Vascular Surgery'],
            ['title' => 'Centre for Spinal Diseases'],
            ['title' => 'Clinical Haematology & BMT'],
            ['title' => 'Colon & Rectal Surgeons'],
            ['title' => 'Corneal Transplant'],
            ['title' => 'Critical Care Medicine'],
            ['title' => 'Dental'],
            ['title' => 'Dermatology & Cosmetology'],
            ['title' => 'Diabetology'],
            ['title' => 'Ear Nose Throat Head & Neck Surgery'],
            ['title' => 'Emergency Medicine'],
            ['title' => 'Endocrinology'],
            ['title' => 'Family Physician'],
            ['title' => 'General Physician'],
            ['title' => 'General Surgery'],
            ['title' => 'Generic Medicine'],
            ['title' => 'Homeopathy'],
            ['title' => 'Infectious Diseases'],
            ['title' => 'Internal Medicine'],
            ['title' => 'In-Vitro Fertilisation (IVF)'],
            ['title' => 'Laboratory Medicine'],
            ['title' => 'Liver Transplant & Hepatic Surgery'],
            ['title' => 'Maxillofacial Surgery'],
            ['title' => 'Medical Gastroenterology'],
            ['title' => 'Medical Geneticist'],
            ['title' => 'Medical Oncology & Clinical Hematology'],
            ['title' => 'Medical Oncology'],
            ['title' => 'Minimally Invasive Gynecology'],
            ['title' => 'Neonatology'],
            ['title' => 'Nephrology'],
            ['title' => 'Neuro Modulation'],
            ['title' => 'Nutrition & Dietetics'],
            ['title' => 'Neurology'],
            ['title' => 'Neurosurgery'],
            ['title' => 'Obstetrics & Gynecology'],
            ['title' => 'Ophthalmology'],
            ['title' => 'Orthopedics & Joint Replacement'],
            ['title' => 'Orthopedics Surgeon'],
            ['title' => 'Osteopaths'],
            ['title' => 'Others'],
            ['title' => 'Otolaryngology'],
            ['title' => 'Pathology'],
            ['title' => 'Pain Management'],
            ['title' => 'Pediatric'],
            ['title' => 'Pediatric Surgery'],
            ['title' => 'physiatry'],
            ['title' => 'Physiotherapy'],
            ['title' => 'Plastic Surgery'],
            ['title' => 'Podiatric'],
            ['title' => 'Preventive Medicine'],
            ['title' => 'Psychiatry'],
            ['title' => 'Pulmonology'],
            ['title' => 'Radiology'],
            ['title' => 'Renal Transplant'],
            ['title' => 'Reproductive Medicine & IVF'],
            ['title' => 'Rheumatology'],
            ['title' => 'Robotic Surgery'],
            ['title' => 'Sleep Medicine'],
            ['title' => 'Sport Medicine'],
            ['title' => 'Surgical Gastroenterology'],
            ['title' => 'Surgical Oncology'],
            ['title' => 'Urology'],
            ['title' => 'Vascular & Endovascular Surgery'],
        ];

        foreach ($input as $data) {
            Department::insert($data);
        }
    }
}
