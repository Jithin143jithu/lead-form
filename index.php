<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aura Consultants | Apply Now</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="favicon.ico">


    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />



</head>

<body>

    <div class="main-wrapper">

        <!-- LEFT BRAND PANEL -->
        <div class="brand-panel">
            <div class="brand-content">
                <img src="logo.png" alt="Aura Consultants" class="brand-logo">
                <h1>Welcome</h1>
                <p>You are 30 seconds away from finding your next job opportunity.</p>
            </div>
        </div>

        <!-- RIGHT FORM PANEL -->
        <div class="form-panel">
            <div class="form-card">

                <h2 class="form-title">Complete Your Job Application</h2>

                <form id="leadForm" method="POST">

                    <div class="form-section-title">Basic Information</div>

                    <div class="form-grid">

                        <div class="form-group">
                            <label for="full_name">Full Name *</label>
                            <input type="text" id="full_name" name="full_name" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Mobile Number *</label>
                            <input type="text" id="phone" name="phone" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="gender">Gender *</label>
                            <select id="gender" name="gender" required>
                                <option value="">Select</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="dob">Date of Birth *</label>
                            <input type="date" id="dob" name="dob" required>
                        </div>

                        <div class="form-group">
                            <label for="district">District *</label>
                            <select id="districtSelect" name="district" required>
                                <option value="">Select District</option>
                                <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                                <option value="Kollam">Kollam</option>
                                <option value="Pathanamthitta">Pathanamthitta</option>
                                <option value="Alappuzha">Alappuzha</option>
                                <option value="Kottayam">Kottayam</option>
                                <option value="Idukki">Idukki</option>
                                <option value="Ernakulam">Ernakulam</option>
                                <option value="Thrissur">Thrissur</option>
                                <option value="Palakkad">Palakkad</option>
                                <option value="Malappuram">Malappuram</option>
                                <option value="Kozhikode">Kozhikode</option>
                                <option value="Wayanad">Wayanad</option>
                                <option value="Kannur">Kannur</option>
                                <option value="Kasaragod">Kasaragod</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="marital_status">Marital Status *</label>
                            <select id="marital_status" name="marital_status" required>
                                <option value="">Select</option>
                                <option>Single</option>
                                <option>Married</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="employment_status">Employment Status *</label>
                            <select id="employment_status" name="employment_status" required>
                                <option value="">Select</option>
                                <option>Fresher</option>
                                <option>Employed</option>
                                <option>Unemployed</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="total_experience">Total Work Experience *</label>
                            <input type="text" id="total_experience" name="total_experience" required>
                        </div>

                        <div class="form-group full-width">
                            <label for="locationsSelect">Preferred Locations (Max 5)*</label>
                            <select name="preferred_locations[]" id="locationsSelect" multiple required>
                                <option value="All Kerala">All Kerala</option>
                                <option value="Adoor,Pathanamthitta,Kerala">Adoor,Pathanamthitta,Kerala</option>
                                <option value="Alappuzha,Alappuzha,Kerala">Alappuzha,Alappuzha,Kerala</option>
                                <option value="Alathur,Palakkad,Kerala">Alathur,Palakkad,Kerala</option>
                                <option value="Aluva,Ernakulam,Kerala">Aluva,Ernakulam,Kerala</option>
                                <option value="Ambalappuzha,Alappuzha,Kerala">Ambalappuzha,Alappuzha,Kerala</option>
                                <option value="Angamaly,Ernakulam,Kerala">Angamaly,Ernakulam,Kerala</option>
                                <option value="Attingal,Thiruvananthapuram,Kerala">
                                    Attingal,Thiruvananthapuram,Kerala</option>
                                <option value="Chalakudy,Thrissur,Kerala">Chalakudy,Thrissur,Kerala</option>
                                <option value="Changanassery,Kottayam,Kerala">Changanassery,Kottayam,Kerala</option>
                                <option value="Chavakkad,Thrissur,Kerala">Chavakkad,Thrissur,Kerala</option>
                                <option value="Chengannur,Alappuzha,Kerala">Chengannur,Alappuzha,Kerala</option>
                                <option value="Cherthala,Alappuzha,Kerala">Cherthala,Alappuzha,Kerala</option>
                                <option value="Chittur,Palakkad,Kerala">Chittur,Palakkad,Kerala</option>
                                <option value="Devikulam,Idukki,Kerala">Devikulam,Idukki,Kerala</option>
                                <option value="Ernakulam,Ernakulam,Kerala">Ernakulam,Ernakulam,Kerala</option>
                                <option value="Feroke,Kozhikode,Kerala">Feroke,Kozhikode,Kerala</option>
                                <option value="Guruvayur,Thrissur,Kerala">Guruvayur,Thrissur,Kerala</option>
                                <option value="Haripad,Alappuzha,Kerala">Haripad,Alappuzha,Kerala</option>
                                <option value="Hosdurg,Kasargod,Kerala">Hosdurg,Kasargod,Kerala</option>
                                <option value="Idukki,Idukki,Kerala">Idukki,Idukki,Kerala</option>
                                <option value="Irinjalakuda,Thrissur,Kerala">Irinjalakuda,Thrissur,Kerala</option>
                                <option value="Iritty,Kannur,Kerala">Iritty,Kannur,Kerala</option>
                                <option value="Kalpetta,Wayanad,Kerala">Kalpetta,Wayanad,Kerala</option>
                                <option value="Kanhangad,Kasargod,Kerala">Kanhangad,Kasargod,Kerala</option>
                                <option value="Kanjirappally,Kottayam,Kerala">Kanjirappally,Kottayam,Kerala</option>
                                <option value="Kannur,Kannur,Kerala">Kannur,Kannur,Kerala</option>
                                <option value="Karunagappally,Kollam,Kerala">Karunagappally,Kollam,Kerala</option>
                                <option value="Kasargod,Kasargod,Kerala">Kasargod,Kasargod,Kerala</option>
                                <option value="Kattakada,Thiruvananthapuram,Kerala">
                                    Kattakada,Thiruvananthapuram,Kerala</option>
                                <option value="Kattappana,Idukki,Kerala">Kattappana,Idukki,Kerala</option>
                                <option value="Kayamkulam,Alappuzha,Kerala">Kayamkulam,Alappuzha,Kerala</option>
                                <option value="Kazhakkoottam,Thiruvananthapuram,Kerala">
                                    Kazhakkoottam,Thiruvananthapuram,Kerala</option>
                                <option value="Kochi,Ernakulam,Kerala">Kochi,Ernakulam,Kerala</option>
                                <option value="Kodungallur,Thrissur,Kerala">Kodungallur,Thrissur,Kerala</option>
                                <option value="Kollam,Kollam,Kerala">Kollam,Kollam,Kerala</option>
                                <option value="Kondotty,Malappuram,Kerala">Kondotty,Malappuram,Kerala</option>
                                <option value="Kothamangalam,Ernakulam,Kerala">Kothamangalam,Ernakulam,Kerala
                                </option>
                                <option value="Kottakkal,Malappuram,Kerala">Kottakkal,Malappuram,Kerala</option>
                                <option value="Kottarakkara,Kollam,Kerala">Kottarakkara,Kollam,Kerala</option>
                                <option value="Kottayam,Kottayam,Kerala">Kottayam,Kottayam,Kerala</option>
                                <option value="Kovalam,Thiruvananthapuram,Kerala">Kovalam,Thiruvananthapuram,Kerala
                                </option>
                                <option value="Koyilandy,Kozhikode,Kerala">Koyilandy,Kozhikode,Kerala</option>
                                <option value="Kozhencherry,Pathanamthitta,Kerala">
                                    Kozhencherry,Pathanamthitta,Kerala</option>
                                <option value="Kozhikode,Kozhikode,Kerala">Kozhikode,Kozhikode,Kerala</option>
                                <option value="Kunnamkulam,Thrissur,Kerala">Kunnamkulam,Thrissur,Kerala</option>
                                <option value="Kuthuparamba,Kannur,Kerala">Kuthuparamba,Kannur,Kerala</option>
                                <option value="Malappuram,Malappuram,Kerala">Malappuram,Malappuram,Kerala</option>
                                <option value="Mallappally,Pathanamthitta,Kerala">Mallappally,Pathanamthitta,Kerala
                                </option>
                                <option value="Mananthavady,Wayanad,Kerala">Mananthavady,Wayanad,Kerala</option>
                                <option value="Manjeri,Malappuram,Kerala">Manjeri,Malappuram,Kerala</option>
                                <option value="Manjeswharam,Kasargod,Kerala">Manjeswharam,Kasargod,Kerala</option>
                                <option value="Mannarkkad,Palakkad,Kerala">Mannarkkad,Palakkad,Kerala</option>
                                <option value="Mattanur,Kannur,Kerala">Mattanur,Kannur,Kerala</option>
                                <option value="Mavelikara,Alappuzha,Kerala">Mavelikara,Alappuzha,Kerala</option>
                                <option value="Munnar,Idukki,Kerala">Munnar,Idukki,Kerala</option>
                                <option value="Muvattupuzha,Ernakulam,Kerala">Muvattupuzha,Ernakulam,Kerala</option>
                                <option value="Nedumangad,Thiruvananthapuram,Kerala">
                                    Nedumangad,Thiruvananthapuram,Kerala</option>
                                <option value="Neyyattinkara,Thiruvananthapuram,Kerala">
                                    Neyyattinkara,Thiruvananthapuram,Kerala</option>
                                <option value="Nilambur,Malappuram,Kerala">Nilambur,Malappuram,Kerala</option>
                                <option value="NorthParavur,Ernakulam,Kerala">NorthParavur,Ernakulam,Kerala</option>
                                <option value="Ottapalam,Palakkad,Kerala">Ottapalam,Palakkad,Kerala</option>
                                <option value="Pala,Kottayam,Kerala">Pala,Kottayam,Kerala</option>
                                <option value="Palakkad,Palakkad,Kerala">Palakkad,Palakkad,Kerala</option>
                                <option value="Pathanamthitta,Pathanamthitta,Kerala">
                                    Pathanamthitta,Pathanamthitta,Kerala</option>
                                <option value="Pathanapuram,Kollam,Kerala">Pathanapuram,Kollam,Kerala</option>
                                <option value="Pattambi,Palakkad,Kerala">Pattambi,Palakkad,Kerala</option>
                                <option value="Payyanur,Kannur,Kerala">Payyanur,Kannur,Kerala</option>
                                <option value="Peerumade,Idukki,Kerala">Peerumade,Idukki,Kerala</option>
                                <option value="Perintalmanna,Malappuram,Kerala">Perintalmanna,Malappuram,Kerala
                                </option>
                                <option value="Perumbavoor,Ernakulam,Kerala">Perumbavoor,Ernakulam,Kerala</option>
                                <option value="Ponnani,Malappuram,Kerala">Ponnani,Malappuram,Kerala</option>
                                <option value="Punalur,Kollam,Kerala">Punalur,Kollam,Kerala</option>
                                <option value="Ranni,Pathanamthitta,Kerala">Ranni,Pathanamthitta,Kerala</option>
                                <option value="Sasthamcotta,Kollam,Kerala">Sasthamcotta,Kollam,Kerala</option>
                                <option value="SulthanBathery,Wayanad,Kerala">SulthanBathery,Wayanad,Kerala</option>
                                <option value="Taliparamba,Kannur,Kerala">Taliparamba,Kannur,Kerala</option>
                                <option value="Thalassery,Kannur,Kerala">Thalassery,Kannur,Kerala</option>
                                <option value="Thamarassery,Kozhikode,Kerala">Thamarassery,Kozhikode,Kerala</option>
                                <option value="Thiruvalla,Pathanamthitta,Kerala">Thiruvalla,Pathanamthitta,Kerala
                                </option>
                                <option value="Thiruvananthapuram,Thiruvananthapuram,Kerala">
                                    Thiruvananthapuram,Thiruvananthapuram,Kerala</option>
                                <option value="Thodupuzha,Idukki,Kerala">Thodupuzha,Idukki,Kerala</option>
                                <option value="Thrissur,Thrissur,Kerala">Thrissur,Thrissur,Kerala</option>
                                <option value="Tirur,Malappuram,Kerala">Tirur,Malappuram,Kerala</option>
                                <option value="Tirurangadi,Malappuram,Kerala">Tirurangadi,Malappuram,Kerala</option>
                                <option value="Vadakara,Kozhikode,Kerala">Vadakara,Kozhikode,Kerala</option>
                                <option value="Vaikom,Kottayam,Kerala">Vaikom,Kottayam,Kerala</option>
                                <option value="Varkala,Thiruvananthapuram,Kerala">Varkala,Thiruvananthapuram,Kerala
                                </option>
                                <option value="Vythiri,Wayanad,Kerala">Vythiri,Wayanad,Kerala</option>
                                <option value="Wadakkanchery,Thrissur,Kerala">Wadakkanchery,Thrissur,Kerala</option>
                                <option value="Wayanad,Wayanad,Kerala">Wayanad,Wayanad,Kerala</option>
                            </select>
                        </div>

                        <div class="form-group full-width">
                            <label for="rolesSelect">Preferred Job Roles (Max 5)*</label>
                            <select name="preferred_roles[]" id="rolesSelect" multiple required>
                                <option value="3DDesigner">3DDesigner</option>
                                <option value="3DVisualizer">3DVisualizer</option>
                                <option value="AariWorker">AariWorker</option>
                                <option value="AbacusTeacher">AbacusTeacher</option>
                                <option value="AcademicConsultant">AcademicConsultant</option>
                                <option value="AcademicCounselor">AcademicCounselor</option>
                                <option value="AccountancyTeacher">AccountancyTeacher</option>
                                <option value="Accountant">Accountant</option>
                                <option value="AccountingFaculty">AccountingFaculty</option>
                                <option value="AccountsAuditor">AccountsAuditor</option>
                                <option value="AccountsManager">AccountsManager</option>
                                <option value="ACTechnician">ACTechnician</option>
                                <option value="Actor">Actor</option>
                                <option value="Acupuncture">Acupuncture</option>
                                <option value="AdministrationExecutive">AdministrationExecutive</option>
                                <option value="AdministrationFaculty">AdministrationFaculty</option>
                                <option value="AdministrationManager">AdministrationManager</option>
                                <option value="AdministrativeIntern">AdministrativeIntern</option>
                                <option value="AdmissionCounselor">AdmissionCounselor</option>
                                <option value="AgricultureEngineer">AgricultureEngineer</option>
                                <option value="AircraftMaintenanceEngineer">AircraftMaintenanceEngineer</option>
                                <option value="AllopathicDoctor">AllopathicDoctor</option>
                                <option value="AllRounderChef">AllRounderChef</option>
                                <option value="AllRounderCook">AllRounderCook</option>
                                <option value="AluminumFabrication">AluminumFabrication</option>
                                <option value="AmusementRideOperator">AmusementRideOperator</option>
                                <option value="AnatomyFaculty">AnatomyFaculty</option>
                                <option value="Anchor">Anchor</option>
                                <option value="AndroidDeveloper">AndroidDeveloper</option>
                                <option value="AnesthesiaTechnician">AnesthesiaTechnician</option>
                                <option value="AngularDeveloper">AngularDeveloper</option>
                                <option value="Animation">Animation</option>
                                <option value="AptitudeAndReasoningFaculty">AptitudeAndReasoningFaculty</option>
                                <option value="ArabicChef">ArabicChef</option>
                                <option value="ArabicTeacher">ArabicTeacher</option>
                                <option value="Architect">Architect</option>
                                <option value="AreaSalesManager">AreaSalesManager</option>
                                <option value="ArtandCraftDesigner">ArtandCraftDesigner</option>
                                <option value="ArtAndCraftTeacher">ArtAndCraftTeacher</option>
                                <option value="ArtcamDesigner">ArtcamDesigner</option>
                                <option value="ArtificialIntelligence">ArtificialIntelligence</option>
                                <option value="ASPDeveloper">ASPDeveloper</option>
                                <option value="AssetVerification">AssetVerification</option>
                                <option value="ATMOperator">ATMOperator</option>
                                <option value="Attender">Attender</option>
                                <option value="AutoCADFireProtection">AutoCADFireProtection</option>
                                <option value="AutomationEngineer">AutomationEngineer</option>
                                <option value="AutomationTechnician">AutomationTechnician</option>
                                <option value="AutomobileAccessoriesFitter">AutomobileAccessoriesFitter</option>
                                <option value="AutomobileACTechnician">AutomobileACTechnician</option>
                                <option value="AutomobileBodyshopAdvisor">AutomobileBodyshopAdvisor</option>
                                <option value="AutomobileBodyshopManager">AutomobileBodyshopManager</option>
                                <option value="AutomobileElectrician">AutomobileElectrician</option>
                                <option value="AutomobileEngineer">AutomobileEngineer</option>
                                <option value="AutomobileEngineeringFaculty">AutomobileEngineeringFaculty</option>
                                <option value="AutomobilePainter">AutomobilePainter</option>
                                <option value="AutomobileQualityController">AutomobileQualityController</option>
                                <option value="AutomobileServiceAdvisor">AutomobileServiceAdvisor</option>
                                <option value="AutomobileServiceManager">AutomobileServiceManager</option>
                                <option value="AutomobileServiceSupervisor">AutomobileServiceSupervisor</option>
                                <option value="AutomobileTechnicalSupervisor">AutomobileTechnicalSupervisor</option>
                                <option value="AutomobileTinker">AutomobileTinker</option>
                                <option value="AutomobileWorksManager">AutomobileWorksManager</option>
                                <option value="Aviation">Aviation</option>
                                <option value="AyurvedaDoctor">AyurvedaDoctor</option>
                                <option value="AyurvedaTherapist">AyurvedaTherapist</option>
                                <option value="BabyCare">BabyCare</option>
                                <option value="BackEndDeveloper">BackEndDeveloper</option>
                                <option value="BackOfficeStaff">BackOfficeStaff</option>
                                <option value="BakeryChef">BakeryChef</option>
                                <option value="BankingFaculty">BankingFaculty</option>
                                <option value="BanquetManager">BanquetManager</option>
                                <option value="Barista">Barista</option>
                                <option value="BarMan">BarMan</option>
                                <option value="BarManager">BarManager</option>
                                <option value="BarSupervisor">BarSupervisor</option>
                                <option value="BarTender">BarTender</option>
                                <option value="BatteryTechnician">BatteryTechnician</option>
                                <option value="Beautician">Beautician</option>
                                <option value="BeauticianFaculty">BeauticianFaculty</option>
                                <option value="BEdandMEdFaculty">BEdandMEdFaculty</option>
                                <option value="BehaviorTherapist">BehaviorTherapist</option>
                                <option value="BellBoy">BellBoy</option>
                                <option value="BicycleMechanic">BicycleMechanic</option>
                                <option value="BikeRider">BikeRider</option>
                                <option value="Billing">Billing</option>
                                <option value="BIMModeler">BIMModeler</option>
                                <option value="Biochemist">Biochemist</option>
                                <option value="BiochemistryFaculty">BiochemistryFaculty</option>
                                <option value="Biofertilizer">Biofertilizer</option>
                                <option value="BiologyTeacher">BiologyTeacher</option>
                                <option value="BiomedicalEngineer">BiomedicalEngineer</option>
                                <option value="BiometricMachineTechnician">BiometricMachineTechnician</option>
                                <option value="Biotechnology">Biotechnology</option>
                                <option value="BlockchainDeveloper">BlockchainDeveloper</option>
                                <option value="BloodCollectionExecutive">BloodCollectionExecutive</option>
                                <option value="BMSEngineer">BMSEngineer</option>
                                <option value="BoatOperator">BoatOperator</option>
                                <option value="BodyshopSupervisor">BodyshopSupervisor</option>
                                <option value="BoilerOperator">BoilerOperator</option>
                                <option value="BookBinder">BookBinder</option>
                                <option value="BorewellTechnician">BorewellTechnician</option>
                                <option value="BoringMachineOperator">BoringMachineOperator</option>
                                <option value="BormaStaff">BormaStaff</option>
                                <option value="BotanyTeacher">BotanyTeacher</option>
                                <option value="BPOTelecaller">BPOTelecaller</option>
                                <option value="BusinessAnalyst">BusinessAnalyst</option>
                                <option value="BusinessAssociate">BusinessAssociate</option>
                                <option value="BusinessDevelopmentExecutive">BusinessDevelopmentExecutive</option>
                                <option value="BusinessDevelopmentManager">BusinessDevelopmentManager</option>
                                <option value="BusinessStudiesTeacher">BusinessStudiesTeacher</option>
                                <option value="Butcher">Butcher</option>
                                <option value="C#Developer">C#Developer</option>
                                <option value="C++Developer">C++Developer</option>
                                <option value="CabinCrew">CabinCrew</option>
                                <option value="CableTechnician">CableTechnician</option>
                                <option value="CafeteriaSupervisor">CafeteriaSupervisor</option>
                                <option value="CakeMaker">CakeMaker</option>
                                <option value="CameraAssistant">CameraAssistant</option>
                                <option value="CameraMan">CameraMan</option>
                                <option value="CarDetailer">CarDetailer</option>
                                <option value="Caretaker">Caretaker</option>
                                <option value="CarEvaluator">CarEvaluator</option>
                                <option value="CargoOfficer">CargoOfficer</option>
                                <option value="Carpenter">Carpenter</option>
                                <option value="CarpenterHelper">CarpenterHelper</option>
                                <option value="CarPolishing">CarPolishing</option>
                                <option value="CarWashing">CarWashing</option>
                                <option value="Cashier">Cashier</option>
                                <option value="CateringManager">CateringManager</option>
                                <option value="CathLabTechnician">CathLabTechnician</option>
                                <option value="CCTVTechnician">CCTVTechnician</option>
                                <option value="CDPChef">CDPChef</option>
                                <option value="CeramicCoatingStaff">CeramicCoatingStaff</option>
                                <option value="ChaatChef">ChaatChef</option>
                                <option value="Chairman">Chairman</option>
                                <option value="Charteredaccountant">Charteredaccountant</option>
                                <option value="ChemicalEngineer">ChemicalEngineer</option>
                                <option value="ChemistryTeacher">ChemistryTeacher</option>
                                <option value="ChessTrainer">ChessTrainer</option>
                                <option value="ChiefAccountant">ChiefAccountant</option>
                                <option value="ChiefExecutiveOfficer">ChiefExecutiveOfficer</option>
                                <option value="ChiefOperatingOfficer">ChiefOperatingOfficer</option>
                                <option value="ChineseChef">ChineseChef</option>
                                <option value="ChineseCook">ChineseCook</option>
                                <option value="ChipLevelTechnician">ChipLevelTechnician</option>
                                <option value="Cinematographer">Cinematographer</option>
                                <option value="CivilAutoCADDesigner">CivilAutoCADDesigner</option>
                                <option value="CivilAutoCADFaculty">CivilAutoCADFaculty</option>
                                <option value="CivilDraughtsman">CivilDraughtsman</option>
                                <option value="CivilEngineer">CivilEngineer</option>
                                <option value="CivilEngineeringFaculty">CivilEngineeringFaculty</option>
                                <option value="CivilForeman">CivilForeman</option>
                                <option value="CivilGeneralManager">CivilGeneralManager</option>
                                <option value="CivilOperationManager">CivilOperationManager</option>
                                <option value="CivilProjectCoordinator">CivilProjectCoordinator</option>
                                <option value="CivilProjectManager">CivilProjectManager</option>
                                <option value="CivilSiteSupervisor">CivilSiteSupervisor</option>
                                <option value="CivilSurveyor">CivilSurveyor</option>
                                <option value="ClaimCoordinator">ClaimCoordinator</option>
                                <option value="CleaningStaff">CleaningStaff</option>
                                <option value="CleaningSupervisor">CleaningSupervisor</option>
                                <option value="Clerk">Clerk</option>
                                <option value="ClinicalAssistant">ClinicalAssistant</option>
                                <option value="ClinicCoordinator">ClinicCoordinator</option>
                                <option value="CloudEngineer">CloudEngineer</option>
                                <option value="CNCMillingMachineOperator">CNCMillingMachineOperator</option>
                                <option value="CNGTechnician">CNGTechnician</option>
                                <option value="CoffeeMaker">CoffeeMaker</option>
                                <option value="CoirFactoryOperator">CoirFactoryOperator</option>
                                <option value="ColdStorageSupervisor">ColdStorageSupervisor</option>
                                <option value="CollectionExecutive">CollectionExecutive</option>
                                <option value="CollectionManager">CollectionManager</option>
                                <option value="CommerceTeacher">CommerceTeacher</option>
                                <option value="CompanySecretary">CompanySecretary</option>
                                <option value="CompressorTechnician">CompressorTechnician</option>
                                <option value="ComputerEngineer">ComputerEngineer</option>
                                <option value="ComputerHardwareTechnicalTrainer">ComputerHardwareTechnicalTrainer
                                </option>
                                <option value="ComputerHardwareTechnician">ComputerHardwareTechnician</option>
                                <option value="ComputerOperator">ComputerOperator</option>
                                <option value="ComputerScienceEngineerFaculty">ComputerScienceEngineerFaculty</option>
                                <option value="ComputerTeacher">ComputerTeacher</option>
                                <option value="ConstructionSupervsor">ConstructionSupervsor</option>
                                <option value="ContentCreator">ContentCreator</option>
                                <option value="ContentWriter">ContentWriter</option>
                                <option value="ContinentalChef">ContinentalChef</option>
                                <option value="ContinentalCook">ContinentalCook</option>
                                <option value="ConventionalGrindingOperator">ConventionalGrindingOperator</option>
                                <option value="CoolingFilmWorker">CoolingFilmWorker</option>
                                <option value="CopyWriter">CopyWriter</option>
                                <option value="CorelDrawDesigner">CorelDrawDesigner</option>
                                <option value="CounterSalesStaff">CounterSalesStaff</option>
                                <option value="CraneOperator">CraneOperator</option>
                                <option value="CreativeDesigner">CreativeDesigner</option>
                                <option value="CreativeDirector">CreativeDirector</option>
                                <option value="CSSDTechnician">CSSDTechnician</option>
                                <option value="CTScanTechnician">CTScanTechnician</option>
                                <option value="CurtainFitter">CurtainFitter</option>
                                <option value="CustomerRelationExecutive">CustomerRelationExecutive</option>
                                <option value="CustomerRelationManager">CustomerRelationManager</option>
                                <option value="CyberSecurity">CyberSecurity</option>
                                <option value="DairyTechnologistManager">DairyTechnologistManager</option>
                                <option value="DanceTeacher">DanceTeacher</option>
                                <option value="DataAnalyst">DataAnalyst</option>
                                <option value="DataEntry">DataEntry</option>
                                <option value="DataScienceFaculty">DataScienceFaculty</option>
                                <option value="DeliveryCoordinator">DeliveryCoordinator</option>
                                <option value="DeliveryExecutive">DeliveryExecutive</option>
                                <option value="DeliveryManager">DeliveryManager</option>
                                <option value="DentalAssistant">DentalAssistant</option>
                                <option value="DentalDoctor">DentalDoctor</option>
                                <option value="DentalHygienist">DentalHygienist</option>
                                <option value="DentalLabTechnician">DentalLabTechnician</option>
                                <option value="DentalTechnician">DentalTechnician</option>
                                <option value="Denter">Denter</option>
                                <option value="DialysisTechnician">DialysisTechnician</option>
                                <option value="DieMaking">DieMaking</option>
                                <option value="DieselMechanic">DieselMechanic</option>
                                <option value="Dietitian">Dietitian</option>
                                <option value="DigitalArtist">DigitalArtist</option>
                                <option value="DigitalCameraTechnician">DigitalCameraTechnician</option>
                                <option value="DigitalMarketingExecutive">DigitalMarketingExecutive</option>
                                <option value="DigitalMarketingFaculty">DigitalMarketingFaculty</option>
                                <option value="DigitalMarketingManager">DigitalMarketingManager</option>
                                <option value="DigitalPrinting">DigitalPrinting</option>
                                <option value="DishWashing">DishWashing</option>
                                <option value="DispatchExecutive">DispatchExecutive</option>
                                <option value="DistributionExecutive">DistributionExecutive</option>
                                <option value="DistributionManager">DistributionManager</option>
                                <option value="DocumentationExecutive">DocumentationExecutive</option>
                                <option value="DogTrainer">DogTrainer</option>
                                <option value="DotNetDeveloper">DotNetDeveloper</option>
                                <option value="DrawingTeacher">DrawingTeacher</option>
                                <option value="DrivingInstructor">DrivingInstructor</option>
                                <option value="DTPOperator">DTPOperator</option>
                                <option value="DubbingArtist">DubbingArtist</option>
                                <option value="DutyManager">DutyManager</option>
                                <option value="EarthMovingEquipmentFabricator">EarthMovingEquipmentFabricator</option>
                                <option value="ECGTechnician">ECGTechnician</option>
                                <option value="ECHOTechnician">ECHOTechnician</option>
                                <option value="EconomicsTeacher">EconomicsTeacher</option>
                                <option value="EdgeBandingMachineOperator">EdgeBandingMachineOperator</option>
                                <option value="EEGTechnician">EEGTechnician</option>
                                <option value="ElectricalAutoCAD">ElectricalAutoCAD</option>
                                <option value="ElectricalAutomationEngineer">ElectricalAutomationEngineer</option>
                                <option value="ElectricalDraughtsman">ElectricalDraughtsman</option>
                                <option value="ElectricalEngineer">ElectricalEngineer</option>
                                <option value="ElectricalEngineeringFaculty">ElectricalEngineeringFaculty</option>
                                <option value="ElectricalHelper">ElectricalHelper</option>
                                <option value="ElectricalMaintenanceTechnician">ElectricalMaintenanceTechnician</option>
                                <option value="ElectricalProjectEngineer">ElectricalProjectEngineer</option>
                                <option value="ElectricalSupervisor">ElectricalSupervisor</option>
                                <option value="Electrician">Electrician</option>
                                <option value="ElectricScooterMechanic">ElectricScooterMechanic</option>
                                <option value="ElectronicsEngineer">ElectronicsEngineer</option>
                                <option value="ElectronicsEngineeringFaculty">ElectronicsEngineeringFaculty</option>
                                <option value="ElectronicsServiceCoordinator">ElectronicsServiceCoordinator</option>
                                <option value="ElectronicsTechnician">ElectronicsTechnician</option>
                                <option value="ElectronicsTechnicianHelper">ElectronicsTechnicianHelper</option>
                                <option value="ElevatorTechnician">ElevatorTechnician</option>
                                <option value="EmbeddedDeveloper">EmbeddedDeveloper</option>
                                <option value="EnglishTeacher">EnglishTeacher</option>
                                <option value="EnvironmentalScienceTeacher">EnvironmentalScienceTeacher</option>
                                <option value="ERPDeveloper">ERPDeveloper</option>
                                <option value="EstimationEngineer">EstimationEngineer</option>
                                <option value="EthicalHacking">EthicalHacking</option>
                                <option value="EventCoordinator">EventCoordinator</option>
                                <option value="EventManager">EventManager</option>
                                <option value="ExecutiveChef">ExecutiveChef</option>
                                <option value="ExteriorDesigner">ExteriorDesigner</option>
                                <option value="FabricationHelper">FabricationHelper</option>
                                <option value="FabricDyeing">FabricDyeing</option>
                                <option value="FacilityManager">FacilityManager</option>
                                <option value="FactorySupervisor">FactorySupervisor</option>
                                <option value="Farmer">Farmer</option>
                                <option value="FarmManager">FarmManager</option>
                                <option value="FashionDesigner">FashionDesigner</option>
                                <option value="FashionDesigningFaculty">FashionDesigningFaculty</option>
                                <option value="FibreOpticTechnician">FibreOpticTechnician</option>
                                <option value="FieldSalesExecutive">FieldSalesExecutive</option>
                                <option value="FieldSalesManager">FieldSalesManager</option>
                                <option value="FinanceAdvisor">FinanceAdvisor</option>
                                <option value="FinanceBranchManager">FinanceBranchManager</option>
                                <option value="FinanceCoordinator">FinanceCoordinator</option>
                                <option value="FinanceDeputyManager">FinanceDeputyManager</option>
                                <option value="FinanceExecutive">FinanceExecutive</option>
                                <option value="FinanceManager">FinanceManager</option>
                                <option value="FireAndSafetyFaculty">FireAndSafetyFaculty</option>
                                <option value="FireAndSafetyOfficer">FireAndSafetyOfficer</option>
                                <option value="FireProtectionEquipmentTechnician">FireProtectionEquipmentTechnician
                                </option>
                                <option value="FireWorker">FireWorker</option>
                                <option value="FishCutter">FishCutter</option>
                                <option value="FitnessEquipmentTechnician">FitnessEquipmentTechnician</option>
                                <option value="FitnessTrainer">FitnessTrainer</option>
                                <option value="Fitter">Fitter</option>
                                <option value="FlexPrintingMachineOperator">FlexPrintingMachineOperator</option>
                                <option value="FloorIncharge">FloorIncharge</option>
                                <option value="FloorManager">FloorManager</option>
                                <option value="FloorSalesExecutive">FloorSalesExecutive</option>
                                <option value="FloorSupervisor">FloorSupervisor</option>
                                <option value="Florist">Florist</option>
                                <option value="FlowerDecoration">FlowerDecoration</option>
                                <option value="FlowerDesigner">FlowerDesigner</option>
                                <option value="FlutterDeveloper">FlutterDeveloper</option>
                                <option value="FoodAndBeverageService">FoodAndBeverageService</option>
                                <option value="FoodAndBeverageServiceManager">FoodAndBeverageServiceManager</option>
                                <option value="FoodQualityController">FoodQualityController</option>
                                <option value="FoodSafety">FoodSafety</option>
                                <option value="FoodTechnologist">FoodTechnologist</option>
                                <option value="FootwearDesigner">FootwearDesigner</option>
                                <option value="ForeignAccounting">ForeignAccounting</option>
                                <option value="FourWheelerMechanic">FourWheelerMechanic</option>
                                <option value="FrenchLanguageInstructor">FrenchLanguageInstructor</option>
                                <option value="FrontEndDeveloper">FrontEndDeveloper</option>
                                <option value="FrontOfficeAssociate">FrontOfficeAssociate</option>
                                <option value="FrontOfficeExecutive">FrontOfficeExecutive</option>
                                <option value="FrontOfficeManager">FrontOfficeManager</option>
                                <option value="FrontOfficeSupervisor">FrontOfficeSupervisor</option>
                                <option value="Full-Stackdeveloper">Full-Stackdeveloper</option>
                                <option value="Gardener">Gardener</option>
                                <option value="GasStoveTechnician">GasStoveTechnician</option>
                                <option value="GasWelder">GasWelder</option>
                                <option value="GeneralKnowledgeTeacher">GeneralKnowledgeTeacher</option>
                                <option value="GeneralManager">GeneralManager</option>
                                <option value="GeneratorTechnician">GeneratorTechnician</option>
                                <option value="GeographyTeacher">GeographyTeacher</option>
                                <option value="GermanLanguageInstructor">GermanLanguageInstructor</option>
                                <option value="GlassCutter">GlassCutter</option>
                                <option value="GlassWorker">GlassWorker</option>
                                <option value="GlobalVisaConsultant">GlobalVisaConsultant</option>
                                <option value="GodownIncharge">GodownIncharge</option>
                                <option value="GoldAppraiser">GoldAppraiser</option>
                                <option value="GoldLoanExecutive">GoldLoanExecutive</option>
                                <option value="GoldLoanManager">GoldLoanManager</option>
                                <option value="GoldSmith">GoldSmith</option>
                                <option value="GraphicDesigner">GraphicDesigner</option>
                                <option value="GraphicDesignerFaculty">GraphicDesignerFaculty</option>
                                <option value="GuestRelationAssociate">GuestRelationAssociate</option>
                                <option value="GuestRelationExecutive">GuestRelationExecutive</option>
                                <option value="GuestRelationManager">GuestRelationManager</option>
                                <option value="GuitarTeacher">GuitarTeacher</option>
                                <option value="GYMTrainer">GYMTrainer</option>
                                <option value="GypsumBoardWorker">GypsumBoardWorker</option>
                                <option value="HairStylist">HairStylist</option>
                                <option value="HandEmbroidery">HandEmbroidery</option>
                                <option value="HandwritingTeacher">HandwritingTeacher</option>
                                <option value="HealthCareQualityManagement">HealthCareQualityManagement</option>
                                <option value="HeavyDriver">HeavyDriver</option>
                                <option value="HeavyVehicleMechanic">HeavyVehicleMechanic</option>
                                <option value="Helper">Helper</option>
                                <option value="HindiTeacher">HindiTeacher</option>
                                <option value="HistoryTeacher">HistoryTeacher</option>
                                <option value="HomeNurse">HomeNurse</option>
                                <option value="HomeopathyDoctor">HomeopathyDoctor</option>
                                <option value="HomeScienceTeacher">HomeScienceTeacher</option>
                                <option value="HospitalAdministration">HospitalAdministration</option>
                                <option value="HospitalAdministrationFaculty">HospitalAdministrationFaculty</option>
                                <option value="Hostess">Hostess</option>
                                <option value="HotelManagementFaculty">HotelManagementFaculty</option>
                                <option value="HotelManager">HotelManager</option>
                                <option value="HotelSupervisor">HotelSupervisor</option>
                                <option value="HouseBoatDriver">HouseBoatDriver</option>
                                <option value="HousekeepingManager">HousekeepingManager</option>
                                <option value="HousekeepingStaff">HousekeepingStaff</option>
                                <option value="HousekeepingSupervisor">HousekeepingSupervisor</option>
                                <option value="HouseMaid">HouseMaid</option>
                                <option value="HRExecutive">HRExecutive</option>
                                <option value="HRManager">HRManager</option>
                                <option value="HRRecruiter">HRRecruiter</option>
                                <option value="HSEofficer">HSEofficer</option>
                                <option value="HTMLDeveloper">HTMLDeveloper</option>
                                <option value="HumanitiesTeacher">HumanitiesTeacher</option>
                                <option value="HVACEngineer">HVACEngineer</option>
                                <option value="HVACTechnician">HVACTechnician</option>
                                <option value="HydraulicEngineer">HydraulicEngineer</option>
                                <option value="HydrographicSurveyor">HydrographicSurveyor</option>
                                <option value="IASFaculty">IASFaculty</option>
                                <option value="IELTSTeacher">IELTSTeacher</option>
                                <option value="IITFaculty">IITFaculty</option>
                                <option value="Illustrator">Illustrator</option>
                                <option value="ImmigrationConsultant">ImmigrationConsultant</option>
                                <option value="InjectionMoldingMaintenanceMechanic">InjectionMoldingMaintenanceMechanic
                                </option>
                                <option value="InsideSalesManager">InsideSalesManager</option>
                                <option value="InsideSalesStaff">InsideSalesStaff</option>
                                <option value="InsideShowroomSalesExecutive">InsideShowroomSalesExecutive</option>
                                <option value="InstrumentationEngineer">InstrumentationEngineer</option>
                                <option value="InsuranceAdvisorJobs">InsuranceAdvisorJobs</option>
                                <option value="InsuranceExecutive">InsuranceExecutive</option>
                                <option value="InsuranceManager">InsuranceManager</option>
                                <option value="InteriorDesigner">InteriorDesigner</option>
                                <option value="InteriorFitOutEngineer">InteriorFitOutEngineer</option>
                                <option value="InteriorProjectManager">InteriorProjectManager</option>
                                <option value="Interiorsitesupervisor">Interiorsitesupervisor</option>
                                <option value="InteriorSiteWorker">InteriorSiteWorker</option>
                                <option value="InventoryCoordinator">InventoryCoordinator</option>
                                <option value="InventoryInchargeJobs">InventoryInchargeJobs</option>
                                <option value="InventoryManager">InventoryManager</option>
                                <option value="InventorySupervisor">InventorySupervisor</option>
                                <option value="InverterTechnician">InverterTechnician</option>
                                <option value="IOSDeveloper">IOSDeveloper</option>
                                <option value="IPSFaculty">IPSFaculty</option>
                                <option value="IronFabricator">IronFabricator</option>
                                <option value="ItalianLanguageInstructor">ItalianLanguageInstructor</option>
                                <option value="ITProjectManagerJobs">ITProjectManagerJobs</option>
                                <option value="ITSupportEngineer">ITSupportEngineer</option>
                                <option value="JavaDeveloper">JavaDeveloper</option>
                                <option value="JCBOperator">JCBOperator</option>
                                <option value="JEEFaculty">JEEFaculty</option>
                                <option value="Journalist">Journalist</option>
                                <option value="JuiceMaker">JuiceMaker</option>
                                <option value="KarateInstructor">KarateInstructor</option>
                                <option value="KeyboardTeacher">KeyboardTeacher</option>
                                <option value="KeyMaker">KeyMaker</option>
                                <option value="KitchenEquipmentTechnician">KitchenEquipmentTechnician</option>
                                <option value="KitchenHelper">KitchenHelper</option>
                                <option value="KitchenSteward">KitchenSteward</option>
                                <option value="KitchenSupervisor">KitchenSupervisor</option>
                                <option value="Laborer">Laborer</option>
                                <option value="LabTechnician">LabTechnician</option>
                                <option value="LabTechnicianFaculty">LabTechnicianFaculty</option>
                                <option value="Lamination">Lamination</option>
                                <option value="LandActivitiesCoordinator">LandActivitiesCoordinator</option>
                                <option value="LaptopTechnician">LaptopTechnician</option>
                                <option value="LaravelDeveloper">LaravelDeveloper</option>
                                <option value="LaserCuttingMachineOperator">LaserCuttingMachineOperator</option>
                                <option value="LaserPrinting">LaserPrinting</option>
                                <option value="LatheMachineOperator">LatheMachineOperator</option>
                                <option value="LaundryIroning">LaundryIroning</option>
                                <option value="LaundryWashing">LaundryWashing</option>
                                <option value="Lawyer">Lawyer</option>
                                <option value="LEDDisplayTechnician">LEDDisplayTechnician</option>
                                <option value="LegalAdvisor">LegalAdvisor</option>
                                <option value="Librarian">Librarian</option>
                                <option value="LiftOperator">LiftOperator</option>
                                <option value="LiftTechnician">LiftTechnician</option>
                                <option value="LightandSoundOperator">LightandSoundOperator</option>
                                <option value="LightDriver">LightDriver</option>
                                <option value="LoadingStaff">LoadingStaff</option>
                                <option value="LoanManager">LoanManager</option>
                                <option value="LoanOfficer">LoanOfficer</option>
                                <option value="LodgeSupervisor">LodgeSupervisor</option>
                                <option value="Logistics">Logistics</option>
                                <option value="MachineMaintenanceMechanic">MachineMaintenanceMechanic</option>
                                <option value="MachineOperator">MachineOperator</option>
                                <option value="MachineryServiceCoordinator">MachineryServiceCoordinator</option>
                                <option value="MakeupArtist">MakeupArtist</option>
                                <option value="MalayalamTeacher">MalayalamTeacher</option>
                                <option value="MarineEngineer">MarineEngineer</option>
                                <option value="MarketingExecutive">MarketingExecutive</option>
                                <option value="MarketingFaculty">MarketingFaculty</option>
                                <option value="MarketingManager">MarketingManager</option>
                                <option value="MartialArtsTrainer">MartialArtsTrainer</option>
                                <option value="MathematicsTeacher">MathematicsTeacher</option>
                                <option value="MBAHRMFaculty">MBAHRMFaculty</option>
                                <option value="MechanicalAutoCAD">MechanicalAutoCAD</option>
                                <option value="MechanicalEngineer">MechanicalEngineer</option>
                                <option value="MechanicalEngineeringFaculty">MechanicalEngineeringFaculty</option>
                                <option value="MechanicalSiteSupervisor">MechanicalSiteSupervisor</option>
                                <option value="MedicalandSurgicalEquipmentTechnician">
                                    MedicalandSurgicalEquipmentTechnician</option>
                                <option value="MedicalCoding">MedicalCoding</option>
                                <option value="MedicalRepresentative">MedicalRepresentative</option>
                                <option value="MedicalRepresentativeManager">MedicalRepresentativeManager</option>
                                <option value="MedicalTranscriptionist">MedicalTranscriptionist</option>
                                <option value="MehandiDesigner">MehandiDesigner</option>
                                <option value="MEPEngineer">MEPEngineer</option>
                                <option value="MEPExecutive">MEPExecutive</option>
                                <option value="MernStackDeveloper">MernStackDeveloper</option>
                                <option value="MetalFabrication">MetalFabrication</option>
                                <option value="Microbiologist">Microbiologist</option>
                                <option value="MISExecutive">MISExecutive</option>
                                <option value="MobileTechnician">MobileTechnician</option>
                                <option value="Modeling">Modeling</option>
                                <option value="ModelingCoordinator">ModelingCoordinator</option>
                                <option value="ModularKitchenTechnician">ModularKitchenTechnician</option>
                                <option value="Molding">Molding</option>
                                <option value="MontessoriTeacher">MontessoriTeacher</option>
                                <option value="MotionGraphicsDesigner">MotionGraphicsDesigner</option>
                                <option value="MotorWindingTechnician">MotorWindingTechnician</option>
                                <option value="MSOfficeFaculty">MSOfficeFaculty</option>
                                <option value="MSWSocialWorker">MSWSocialWorker</option>
                                <option value="Multimedia">Multimedia</option>
                                <option value="MusicalInstrumentsTrainer">MusicalInstrumentsTrainer</option>
                                <option value="MusicTeacher">MusicTeacher</option>
                                <option value="NailArtist">NailArtist</option>
                                <option value="NDTTechnician">NDTTechnician</option>
                                <option value="NeboshTrainer">NeboshTrainer</option>
                                <option value="NEETFaculty">NEETFaculty</option>
                                <option value="NetworkingEngineer">NetworkingEngineer</option>
                                <option value="NetworkingEngineeringFaculty">NetworkingEngineeringFaculty</option>
                                <option value="NetworkingTechnician">NetworkingTechnician</option>
                                <option value="NewsReader">NewsReader</option>
                                <option value="NewsReporter">NewsReporter</option>
                                <option value="NodeJsDeveloper">NodeJsDeveloper</option>
                                <option value="NorthIndianChef">NorthIndianChef</option>
                                <option value="NorthIndianCook">NorthIndianCook</option>
                                <option value="NurseryTeacher">NurseryTeacher</option>
                                <option value="NursingAssistant">NursingAssistant</option>
                                <option value="NursingFaculty">NursingFaculty</option>
                                <option value="NursingSuperintendent">NursingSuperintendent</option>
                                <option value="Nutritionist">Nutritionist</option>
                                <option value="OccupationalTherapist">OccupationalTherapist</option>
                                <option value="OdooDeveloper">OdooDeveloper</option>
                                <option value="OETTrainer">OETTrainer</option>
                                <option value="OfficeAssistant">OfficeAssistant</option>
                                <option value="OfficeBoy">OfficeBoy</option>
                                <option value="OfficeCoordinator">OfficeCoordinator</option>
                                <option value="OfficeManager">OfficeManager</option>
                                <option value="OfficeSecretary">OfficeSecretary</option>
                                <option value="OfficeStaff">OfficeStaff</option>
                                <option value="OffsetPrintingMachineOperator">OffsetPrintingMachineOperator</option>
                                <option value="OilandGasEngineer">OilandGasEngineer</option>
                                <option value="OperationsExecutive">OperationsExecutive</option>
                                <option value="OperationsManager">OperationsManager</option>
                                <option value="OpticalTechnician">OpticalTechnician</option>
                                <option value="Optometrist">Optometrist</option>
                                <option value="OTNurse">OTNurse</option>
                                <option value="OTTechnician">OTTechnician</option>
                                <option value="Packing">Packing</option>
                                <option value="Painter">Painter</option>
                                <option value="PaintMixer">PaintMixer</option>
                                <option value="PantryMan">PantryMan</option>
                                <option value="ParamedicalFaculty">ParamedicalFaculty</option>
                                <option value="PastryChef">PastryChef</option>
                                <option value="PatchWorker">PatchWorker</option>
                                <option value="PathologyFaculty">PathologyFaculty</option>
                                <option value="PDIIncharge">PDIIncharge</option>
                                <option value="PDITechnician">PDITechnician</option>
                                <option value="PEBEngineer">PEBEngineer</option>
                                <option value="Peon">Peon</option>
                                <option value="PersonalSecretary">PersonalSecretary</option>
                                <option value="PestControlServiceSupervisor">PestControlServiceSupervisor</option>
                                <option value="PestControlTechnician">PestControlTechnician</option>
                                <option value="PetGroomer">PetGroomer</option>
                                <option value="PetrochemicalEngineer">PetrochemicalEngineer</option>
                                <option value="PetrolFilling">PetrolFilling</option>
                                <option value="PGDCATrainer">PGDCATrainer</option>
                                <option value="Pharmacist">Pharmacist</option>
                                <option value="PharmacologyFaculty">PharmacologyFaculty</option>
                                <option value="PharmacyAssistant">PharmacyAssistant</option>
                                <option value="PharmacySales">PharmacySales</option>
                                <option value="PhotoEditor">PhotoEditor</option>
                                <option value="PhotoFrameMaker">PhotoFrameMaker</option>
                                <option value="Photographer">Photographer</option>
                                <option value="PhotoshopDesigner">PhotoshopDesigner</option>
                                <option value="PHPDeveloper">PHPDeveloper</option>
                                <option value="PhysicalEducationTeacher">PhysicalEducationTeacher</option>
                                <option value="PhysicsTeacher">PhysicsTeacher</option>
                                <option value="Physiotherapist">Physiotherapist</option>
                                <option value="PipeFitter">PipeFitter</option>
                                <option value="PipingEngineer">PipingEngineer</option>
                                <option value="PizzaMaker">PizzaMaker</option>
                                <option value="PlacementCoordinator">PlacementCoordinator</option>
                                <option value="PlacementOfficer">PlacementOfficer</option>
                                <option value="PlantOperator">PlantOperator</option>
                                <option value="PlantSupervisor">PlantSupervisor</option>
                                <option value="PLCProgrammer">PLCProgrammer</option>
                                <option value="Plumber">Plumber</option>
                                <option value="PlumbingSupervisor">PlumbingSupervisor</option>
                                <option value="PoliticalScienceTeacher">PoliticalScienceTeacher</option>
                                <option value="PollutionTesting">PollutionTesting</option>
                                <option value="PolymerEngineer">PolymerEngineer</option>
                                <option value="PowerBuilderDeveloper">PowerBuilderDeveloper</option>
                                <option value="PowerToolsTechnician">PowerToolsTechnician</option>
                                <option value="PPFInstaller">PPFInstaller</option>
                                <option value="PrePrimaryTeacher">PrePrimaryTeacher</option>
                                <option value="Principal">Principal</option>
                                <option value="PrinterTechnician">PrinterTechnician</option>
                                <option value="PrintingEmbroidery">PrintingEmbroidery</option>
                                <option value="PrintingMachineOperator">PrintingMachineOperator</option>
                                <option value="ProcessCoordinator">ProcessCoordinator</option>
                                <option value="ProductionExecutive">ProductionExecutive</option>
                                <option value="ProductionManager">ProductionManager</option>
                                <option value="ProductionSupervisor">ProductionSupervisor</option>
                                <option value="Programmer">Programmer</option>
                                <option value="ProgrammingFaculty">ProgrammingFaculty</option>
                                <option value="PropertyManager">PropertyManager</option>
                                <option value="PSCFaculty">PSCFaculty</option>
                                <option value="PsychologyCounselor">PsychologyCounselor</option>
                                <option value="PTETrainer">PTETrainer</option>
                                <option value="PublicRelationOfficer">PublicRelationOfficer</option>
                                <option value="PurchaseExecutive">PurchaseExecutive</option>
                                <option value="PurchaseManager">PurchaseManager</option>
                                <option value="PythonDeveloper">PythonDeveloper</option>
                                <option value="QAQCCivilEngineer">QAQCCivilEngineer</option>
                                <option value="QAQCMechanicalEngineer">QAQCMechanicalEngineer</option>
                                <option value="QuantitySurveyor">QuantitySurveyor</option>
                                <option value="Radiographer">Radiographer</option>
                                <option value="RadioJockey">RadioJockey</option>
                                <option value="RadiologyFaculty">RadiologyFaculty</option>
                                <option value="RadiologyReportTypist">RadiologyReportTypist</option>
                                <option value="ReactNativeDeveloper">ReactNativeDeveloper</option>
                                <option value="Receptionist">Receptionist</option>
                                <option value="RefrigerationTechnician">RefrigerationTechnician</option>
                                <option value="RegionalManager">RegionalManager</option>
                                <option value="ReservationExecutive">ReservationExecutive</option>
                                <option value="ReservationManager">ReservationManager</option>
                                <option value="ResidentRelationshipManager">ResidentRelationshipManager</option>
                                <option value="ResortManager">ResortManager</option>
                                <option value="RestaurantCaptain">RestaurantCaptain</option>
                                <option value="RestaurantManager">RestaurantManager</option>
                                <option value="RestaurantSupervisor">RestaurantSupervisor</option>
                                <option value="RoboticsEngineeringFaculty">RoboticsEngineeringFaculty</option>
                                <option value="RollingMachineOperator">RollingMachineOperator</option>
                                <option value="RollingShutterTechnician">RollingShutterTechnician</option>
                                <option value="RoofingSheetWorker">RoofingSheetWorker</option>
                                <option value="RoomService">RoomService</option>
                                <option value="RubberTechnologist">RubberTechnologist</option>
                                <option value="SalesBranchManager">SalesBranchManager</option>
                                <option value="SalesConsultant">SalesConsultant</option>
                                <option value="SalesCoordinator">SalesCoordinator</option>
                                <option value="SalesEngineer">SalesEngineer</option>
                                <option value="SalesOfficer">SalesOfficer</option>
                                <option value="SalesPromoter">SalesPromoter</option>
                                <option value="SalesSupervisor">SalesSupervisor</option>
                                <option value="SalesTeamLeader">SalesTeamLeader</option>
                                <option value="SalonManager">SalonManager</option>
                                <option value="SandwichMaker">SandwichMaker</option>
                                <option value="SanskritTeacher">SanskritTeacher</option>
                                <option value="SAPFaculty">SAPFaculty</option>
                                <option value="SawMillMachineOperator">SawMillMachineOperator</option>
                                <option value="SawmillSupervisor">SawmillSupervisor</option>
                                <option value="ScienceTeacher">ScienceTeacher</option>
                                <option value="SCIENTIST(PhDinMedical/LifeSciences)">
                                    SCIENTIST(PhDinMedical/LifeSciences)</option>
                                <option value="ScratchProgrammingTrainer">ScratchProgrammingTrainer</option>
                                <option value="ScreenPrinting">ScreenPrinting</option>
                                <option value="SecurityAlarmTechnician">SecurityAlarmTechnician</option>
                                <option value="SecurityGuard">SecurityGuard</option>
                                <option value="SecuritySupervisor">SecuritySupervisor</option>
                                <option value="SEOAnalyst">SEOAnalyst</option>
                                <option value="SewingMachineTechnician">SewingMachineTechnician</option>
                                <option value="ShopAndStoreManager">ShopAndStoreManager</option>
                                <option value="SiddhaDoctor">SiddhaDoctor</option>
                                <option value="SignBoardWorker">SignBoardWorker</option>
                                <option value="SkidderOperator">SkidderOperator</option>
                                <option value="SkinTherapist">SkinTherapist</option>
                                <option value="SMRExecutive">SMRExecutive</option>
                                <option value="SnacksMaker">SnacksMaker</option>
                                <option value="SocialMediaMarketingExecutive">SocialMediaMarketingExecutive</option>
                                <option value="SocialMediaMarketingManager">SocialMediaMarketingManager</option>
                                <option value="SocialScienceTeacher">SocialScienceTeacher</option>
                                <option value="SociologyTeacher">SociologyTeacher</option>
                                <option value="SoftSkillsTrainer">SoftSkillsTrainer</option>
                                <option value="SoftwareEngineer">SoftwareEngineer</option>
                                <option value="SoftwareFaculty">SoftwareFaculty</option>
                                <option value="SoftwareQualityAnalyst">SoftwareQualityAnalyst</option>
                                <option value="SoftwareResearchAnalyst">SoftwareResearchAnalyst</option>
                                <option value="SoftwareTestEngineer">SoftwareTestEngineer</option>
                                <option value="SoilAndWaterTesting">SoilAndWaterTesting</option>
                                <option value="SolarEngineer">SolarEngineer</option>
                                <option value="SolarSiteSupervisor">SolarSiteSupervisor</option>
                                <option value="SolarTechnicalCoordinator">SolarTechnicalCoordinator</option>
                                <option value="SolarTechnician">SolarTechnician</option>
                                <option value="SolidWorkDesigner">SolidWorkDesigner</option>
                                <option value="SoundEngineer">SoundEngineer</option>
                                <option value="SousChef">SousChef</option>
                                <option value="SouthIndianChef">SouthIndianChef</option>
                                <option value="SouthIndianCook">SouthIndianCook</option>
                                <option value="SpaManager">SpaManager</option>
                                <option value="SpanishlanguageInstructor">SpanishlanguageInstructor</option>
                                <option value="SparePartsIncharge">SparePartsIncharge</option>
                                <option value="SparePartsManager">SparePartsManager</option>
                                <option value="SPATherapist">SPATherapist</option>
                                <option value="SpecialEducationTeacher">SpecialEducationTeacher</option>
                                <option value="SpeechTherapist">SpeechTherapist</option>
                                <option value="SpinningMachineOperator">SpinningMachineOperator</option>
                                <option value="SpokenEnglishTeacher">SpokenEnglishTeacher</option>
                                <option value="SportsTrainer">SportsTrainer</option>
                                <option value="SprayPainter">SprayPainter</option>
                                <option value="SQLDeveloper">SQLDeveloper</option>
                                <option value="SRPDesigner">SRPDesigner</option>
                                <option value="SRPDeveloper">SRPDeveloper</option>
                                <option value="StaffNurse">StaffNurse</option>
                                <option value="StageDecoration">StageDecoration</option>
                                <option value="SteelFabrication">SteelFabrication</option>
                                <option value="Stenographer">Stenographer</option>
                                <option value="StickerWorker">StickerWorker</option>
                                <option value="Stitching">Stitching</option>
                                <option value="StockAuditor">StockAuditor</option>
                                <option value="StoreIncharge">StoreIncharge</option>
                                <option value="StoreKeeper">StoreKeeper</option>
                                <option value="STPOperator">STPOperator</option>
                                <option value="StructuralDraughtsman">StructuralDraughtsman</option>
                                <option value="StructuralEngineer">StructuralEngineer</option>
                                <option value="StudentCounselor">StudentCounselor</option>
                                <option value="SUVTechnician">SUVTechnician</option>
                                <option value="SweetMaker">SweetMaker</option>
                                <option value="SwimmingCoach">SwimmingCoach</option>
                                <option value="SwimmingPoolTechnician">SwimmingPoolTechnician</option>
                                <option value="SystemAdministration">SystemAdministration</option>
                                <option value="SystemAnalyst">SystemAnalyst</option>
                                <option value="SystemReliabilityEngineer">SystemReliabilityEngineer</option>
                                <option value="Tailoring">Tailoring</option>
                                <option value="TailoringCuttingMaster">TailoringCuttingMaster</option>
                                <option value="TallyFaculty">TallyFaculty</option>
                                <option value="TamilTeacher">TamilTeacher</option>
                                <option value="TattooArtist">TattooArtist</option>
                                <option value="TeaMaker">TeaMaker</option>
                                <option value="Telecaller">Telecaller</option>
                                <option value="TelecallingTeamLeader">TelecallingTeamLeader</option>
                                <option value="TelecommunicationEngineer">TelecommunicationEngineer</option>
                                <option value="TelemarketingExecutive">TelemarketingExecutive</option>
                                <option value="TeleSalesExecutive">TeleSalesExecutive</option>
                                <option value="TelesalesOfficer">TelesalesOfficer</option>
                                <option value="TestDriveCoordinator">TestDriveCoordinator</option>
                                <option value="TextilePrinting">TextilePrinting</option>
                                <option value="TextilesFabricQualityControl">TextilesFabricQualityControl</option>
                                <option value="TextileWeaving">TextileWeaving</option>
                                <option value="ThreeWheelerMechanic">ThreeWheelerMechanic</option>
                                <option value="TicketingExecutive">TicketingExecutive</option>
                                <option value="TigWelder">TigWelder</option>
                                <option value="TimeKeeper">TimeKeeper</option>
                                <option value="TNPSCFaculty">TNPSCFaculty</option>
                                <option value="ToolMaker">ToolMaker</option>
                                <option value="TourCoordinator">TourCoordinator</option>
                                <option value="TouristGuide">TouristGuide</option>
                                <option value="TourManager">TourManager</option>
                                <option value="TourOperator">TourOperator</option>
                                <option value="TrainingandDevelopmentManager">TrainingandDevelopmentManager</option>
                                <option value="TravelAndTourismExecutive">TravelAndTourismExecutive</option>
                                <option value="TravelConsultant">TravelConsultant</option>
                                <option value="TrolleyBoys">TrolleyBoys</option>
                                <option value="TTCFaculty">TTCFaculty</option>
                                <option value="TuftingMachineOperator">TuftingMachineOperator</option>
                                <option value="Turner">Turner</option>
                                <option value="TwoWheelerMechanic">TwoWheelerMechanic</option>
                                <option value="TwowheelerWashing">TwowheelerWashing</option>
                                <option value="TyrePunctureRepair">TyrePunctureRepair</option>
                                <option value="TyreRetreadingTechnician">TyreRetreadingTechnician</option>
                                <option value="UI/UXDesigner">UI/UXDesigner</option>
                                <option value="UI/UXDeveloper">UI/UXDeveloper</option>
                                <option value="UnaniDoctor">UnaniDoctor</option>
                                <option value="UnrealEngineDeveloper">UnrealEngineDeveloper</option>
                                <option value="UpholsteryFitter">UpholsteryFitter</option>
                                <option value="UpholsteryStitching">UpholsteryStitching</option>
                                <option value="UPVCFabricator">UPVCFabricator</option>
                                <option value="UtilityStaff">UtilityStaff</option>
                                <option value="VeenaTeacher">VeenaTeacher</option>
                                <option value="VehicleBodyBuilding">VehicleBodyBuilding</option>
                                <option value="VehiclePickUp&Drop">VehiclePickUp&Drop</option>
                                <option value="VFXArtist">VFXArtist</option>
                                <option value="VicePresident">VicePresident</option>
                                <option value="VideoEditor">VideoEditor</option>
                                <option value="Videographer">Videographer</option>
                                <option value="VideoPresenter">VideoPresenter</option>
                                <option value="ViolinTeacher">ViolinTeacher</option>
                                <option value="VisualMerchandiser">VisualMerchandiser</option>
                                <option value="VMCOperator">VMCOperator</option>
                                <option value="VRDeveloper">VRDeveloper</option>
                                <option value="Waiter">Waiter</option>
                                <option value="Warden">Warden</option>
                                <option value="WarehouseIncharge">WarehouseIncharge</option>
                                <option value="WarehouseManager">WarehouseManager</option>
                                <option value="WarehouseOperator">WarehouseOperator</option>
                                <option value="WarrantyIncharge">WarrantyIncharge</option>
                                <option value="WashingMachineTechnician">WashingMachineTechnician</option>
                                <option value="Watchman">Watchman</option>
                                <option value="WatchTechnician">WatchTechnician</option>
                                <option value="WaterPurifierTechnician">WaterPurifierTechnician</option>
                                <option value="WaterTreatmentTechnician">WaterTreatmentTechnician</option>
                                <option value="WebsiteDesigner">WebsiteDesigner</option>
                                <option value="WebsiteDeveloper">WebsiteDeveloper</option>
                                <option value="WeddingAlbumDesigner">WeddingAlbumDesigner</option>
                                <option value="WelcomeGirl">WelcomeGirl</option>
                                <option value="Welder">Welder</option>
                                <option value="WeldingHelper">WeldingHelper</option>
                                <option value="WheelAlignmentTechnician">WheelAlignmentTechnician</option>
                                <option value="WindowsDeveloper">WindowsDeveloper</option>
                                <option value="WoodCutting">WoodCutting</option>
                                <option value="WoodPolishing">WoodPolishing</option>
                                <option value="WordpressDeveloper">WordpressDeveloper</option>
                                <option value="XMLDeveloper">XMLDeveloper</option>
                                <option value="XrayTechnician">XrayTechnician</option>
                                <option value="YogaTrainer">YogaTrainer</option>
                                <option value="ZoologyTeacher">ZoologyTeacher</option>
                                <option value="ZumbaTrainer">ZumbaTrainer</option>

                            </select>
                        </div>

                    </div>
                    <div id="formMessage" class="form-message" style="display:none;"></div>


                    <button type="submit" class="btn-submit">Submit Application</button>

                </form>

            </div>
        </div>

    </div>


    <!-- jQuery (Required) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="script.js"></script>
</body>

</html>