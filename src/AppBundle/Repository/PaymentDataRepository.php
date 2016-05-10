<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\PaymentData;

/**
 * PaymentDataRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PaymentDataRepository extends EntityRepository
{
	public function setObjectPropertyFromColumnPosition(PaymentData $paymentData, $columnPosition, $cellValue)
	{
		switch($columnPosition){
			case 'A':
				$paymentData->setCoveredRecipientType($cellValue);	
				break;
			case 'B':
				$paymentData->setTeachingHospitalId($cellValue);
				break;
			case 'C':
				$paymentData->setTeachingHospitalName($cellValue);
				break;
			case 'D':
				$paymentData->setPhsysicianProfileId($cellValue);
				break;
			case 'E':
				$paymentData->setPhysicianFirstName($cellValue);
				break;
			case 'F':
				$paymentData->setPhysicianMiddleName($cellValue);
				break;
			case 'G':
				$paymentData->setPhysicianLastName($cellValue);
				break;
			case 'H':
				$paymentData->setPhysicianNameSuffix($cellValue);
				break;
			case 'I':
				$paymentData->setRecipientPrimaryBusinessAddressLine1($cellValue);
				break;
			case 'J':
				$paymentData->setRecipientPrimaryBusinessAddressLine2($cellValue);
				break;
			case 'K':
				$paymentData->setRecipientCity($cellValue);
				break;
			case 'L':
				$paymentData->setRecipientState($cellValue);
				break;
			case 'M':
				$paymentData->setRecpientZipCode($cellValue);
				break;
			case 'N':
				$paymentData->setRecpientCountry($cellValue);
				break;
			case 'O':
				$paymentData->setRecipientProvince($cellValue);
				break;
			case 'P':
				$paymentData->setRecipientPostCode($cellValue);
				break;
			case 'Q':
				$paymentData->setPhysicianPrimaryType($cellValue);
				break;
			case 'R':
				$paymentData->setPhysicianSpeciality($cellValue);
				break;
			case 'S':
				$paymentData->setPhysicianLicenseState($cellValue);
				break;
			case 'T':
				$paymentData->setPhysicianLicenseState2($cellValue);
				break;
			case 'U':
				$paymentData->setPhysicicanLicenseState3($cellValue);
				break;
			case 'V':
				$paymentData->setPhysicianLicenseState4($cellValue);
				break;
			case 'W':
				$paymentData->setPhysicianLicenseState5($cellValue);
				break;
			case 'X':
				$paymentData->setApplicableManufacturerName($cellValue);
				break;
			case 'Y':
				$paymentData->setApplicableManufacturerId($cellValue);
				break;
			case 'Z':
				$paymentData->setApplicableManufacturerMakingPaymentName($cellValue);
				break;
			case 'AA':
				$paymentData->setApplicableManufacturerState($cellValue);
				break;
			case 'AB':
				$paymentData->setApplicableManufacturerCountry($cellValue);
				break;
			case 'AC':
				$paymentData->setTotalAmountOfPayment($cellValue);
				break;
			case 'AD':				
				$paymentData->setDateOfPayment($cellValue);
				break;
			case 'AE':
				$paymentData->setNumberOfPaymentIncludedInTotal($cellValue);
				break;
			case 'AF':
				$paymentData->setFormOfPaymentOrTransferValue($cellValue);
				break;
			case 'AG':
				$paymentData->setNatureOfPayment($cellValue);
				break;
			case 'AH':
				$paymentData->setCityOfTravel($cellValue);
				break;
			case 'AI':
				$paymentData->setStateOfTravel($cellValue);
				break;
			case 'AJ':
				$paymentData->setCountryOfTravel($cellValue);
				break;
			case 'AK':
				$bool = $this->_convertStringToBoolean($cellValue);
				$paymentData->setPhysicianOwnershipIndicator($bool);
				break;
			case 'AL':
				$paymentData->setThirdPartyPaymentRecipientIndicator($cellValue);
				break;
			case 'AM':
				$paymentData->setNameOfThirdPartyRecievingPayment($cellValue);
				break;
			case 'AN':
				$bool = $this->_convertStringToBoolean($cellValue);
				$paymentData->setCharityIndicator($bool);
				break;
			case 'AO':
				$paymentData->setThirdPartyEqualsCoveredRecipientIndcator($cellValue);
				break;
			case 'AP':
				$paymentData->setContextualInformation($cellValue);
				break;
			case 'AQ':
				$bool = $this->_convertStringToBoolean($cellValue);
				$paymentData->setDelayInPublicationIndicator($bool);
				break;
			case 'AR':
				$paymentData->setRecordId($cellValue);
				break;
			case 'AS':
				$bool = $this->_convertStringToBoolean($cellValue);
				$paymentData->setDisputeStatusForPublication($bool);
				break;
			case 'AT':
				$paymentData->setProductIndicator($cellValue);
				break;
			case 'AU':
				$paymentData->setNameOfAssociatedCoveredDrug($cellValue);
				break;
			case 'AV':
				$paymentData->setNameOfAssociatedCoveredDrug2($cellValue);
				break;
			case 'AW':
				$paymentData->setNameOfAssociatedCoveredDrug3($cellValue);
				break;
			case 'AX':
				$paymentData->setNameOfAssociatedCoveredDrug4($cellValue);
				break;
			case 'AY':
				$paymentData->setNameOfAssociatedCoveredDrug5($cellValue);
				break;
			case 'AZ':
				$paymentData->setNdcOfAssociatedDrug($cellValue);
				break;
			case 'BA':
				$paymentData->setNdcOfAssociatedDrug2($cellValue);
				break;
			case 'BB':
				$paymentData->setNdcOfAssociatedDrug3($cellValue);
				break;
			case 'BC':
				$paymentData->setNdcOfAssociatedDrug4($cellValue);
				break;
			case 'BD':
				$paymentData->setNdcOfAssociatedDrug5($cellValue);
				break;
			case 'BE':
				$paymentData->setNameOfCoveredDeviceOrSupply($cellValue);
			case 'BF':
				$paymentData->setNameOfCoveredDeviceOrSupply2($cellValue);
				break;
			case 'BG':
				$paymentData->setNameOfCoveredDeviceOrSupply3($cellValue);
				break;
			case 'BH':
				$paymentData->setNameOfCoveredDeviceOrSupply4($cellValue);
				break;
			case 'BI':
				$paymentData->setNameOfCoveredDeviceOrSupply5($cellValue);
				break;
			case 'BJ':
				$paymentData->setProgramYear($cellValue);
				break;
			case 'BK':
				$dateTime = strtotime($cellValue);
				$paymentData->setPaymentPublicationDate($dateTime);
				break;
			default:
				throw new \Exception('Invalid Column Position');
		}
		
		return $paymentData;
	}
	
	private function _convertStringToBoolean($cellValue)
	{
		if(strtolower($cellValue) == 'no'){
			return false;
		}
		return true;
	}
	
	public function getDistinctRecords()
	{
		$dql = 'SELECT a FROM AppBundle:PaymentData a
				GROUP BY  a.recordId';
		$query = $this->_em->createQuery($dql);
		return $query->getResult();
	}
	
	public function getEntitiesFromIdArray($entityIds)
	{
		$dql = 'SELECT a FROM AppBundle:PaymentData a
				WHERE a.id in (:entityIds)';
		$query = $this->_em->createQuery($dql);
		$query->setParameter('entityIds', $entityIds, array());
		return $query->getResult();
	}
	
	public function searchAllParams($params)
	{
		
		$dql = 'SELECT a FROM AppBundle:PaymentData a
				WHERE a.id = :params
				OR a.coveredRecipientType LIKE :params
				OR a.teachingHospitalId LIKE :params
				OR a.teachingHospitalName LIKE :params
				OR a.phsysicianProfileId LIKE :params
				OR a.physicianFirstName LIKE :params
				OR a.physicianMiddleName LIKE :params
				OR a.physicianLastName LIKE :params
				OR a.physicianNameSuffix LIKE :params
				OR a.recipientPrimaryBusinessAddressLine1 LIKE :params
				OR a.recipientPrimaryBusinessAddressLine2 LIKE :params
				OR a.recipientCity LIKE :params
				OR a.recipientState LIKE :params
				OR a.recpientZipCode LIKE :params
				OR a.recpientCountry LIKE :params
				OR a.recipientProvince LIKE :params
				OR a.recipientPostCode LIKE :params
				OR a.physicianPrimaryType LIKE :params
				OR a.physicianSpeciality LIKE :params
				OR a.physicianLicenseState LIKE :params
				OR a.physicianLicenseState2 LIKE :params
				OR a.physicicanLicenseState3 LIKE :params
				OR a.physicianLicenseState4 LIKE :params
				OR a.physicianLicenseState5 LIKE :params
				OR a.applicableManufacturerName LIKE :params
				OR a.applicableManufacturerId LIKE :params
				OR a.applicableManufacturerMakingPaymentName LIKE :params
				OR a.applicableManufacturerState LIKE :params
				OR a.applicableManufacturerCountry LIKE :params
				OR a.totalAmountOfPayment LIKE :params
				OR a.dateOfPayment LIKE :params
				OR a.numberOfPaymentIncludedInTotal LIKE :params
				OR a.formOfPaymentOrTransferValue LIKE :params
				OR a.natureOfPayment LIKE :params
				OR a.cityOfTravel LIKE :params
				OR a.stateOfTravel LIKE :params
				OR a.countryOfTravel LIKE :params
				OR a.physicianOwnershipIndicator LIKE :params
				OR a.thirdPartyPaymentRecipientIndicator LIKE :params
				OR a.nameOfThirdPartyRecievingPayment LIKE :params
				OR a.charityIndicator LIKE :params
				OR a.thirdPartyEqualsCoveredRecipientIndcator LIKE :params
				OR a.contextualInformation LIKE :params
				OR a.delayInPublicationIndicator LIKE :params
				OR a.recordId LIKE :params
				OR a.disputeStatusForPublication LIKE :params
				OR a.productIndicator LIKE :params
				OR a.nameOfAssociatedCoveredDrug LIKE :params
				OR a.nameOfAssociatedCoveredDrug2 LIKE :params
				OR a.nameOfAssociatedCoveredDrug3 LIKE :params
				OR a.nameOfAssociatedCoveredDrug4 LIKE :params
				OR a.nameOfAssociatedCoveredDrug5 LIKE :params
				OR a.ndcOfAssociatedDrug LIKE :params
				OR a.ndcOfAssociatedDrug2 LIKE :params
				OR a.ndcOfAssociatedDrug3 LIKE :params
				OR a.ndcOfAssociatedDrug4 LIKE :params
				OR a.ndcOfAssociatedDrug5 LIKE :params
				OR a.nameOfCoveredDeviceOrSupply LIKE :params
				OR a.nameOfCoveredDeviceOrSupply2 LIKE :params
				OR a.nameOfCoveredDeviceOrSupply3 LIKE :params
				OR a.nameOfCoveredDeviceOrSupply4 LIKE :params
				OR a.nameOfCoveredDeviceOrSupply5 LIKE :params
				OR a.programYear LIKE :params
				OR a.paymentPublicationDate LIKE :params';
				$query = $this->_em->createQuery($dql);
				$query->setParameter('params', '%' . $params . '%');
				return $query->getResult();
	}
	
	public function populateSpreadsheetData($entityArray, $phpExcelObject)
	{
		$phpExcelObject->setActiveSheetIndex(0);
		$phpExcelObject = $this->_createExcelHeaderCells($phpExcelObject);
		$excelActiveSheet = $phpExcelObject->getActiveSheet();
		array_unshift($entityArray, null, null);
		for($i = 0; $i <= count($entityArray) - 1; $i++){
			if($entityArray[$i] == null){
				continue;
			}
			$excelActiveSheet->setCellValue('A' . $i, $entityArray[$i]->getCoveredRecipientType())
			->setCellValue('B' . $i, $entityArray[$i]->getTeachingHospitalId())
			->setCellValue('C' . $i, $entityArray[$i]->getTeachingHospitalName())
			->setCellValue('D' . $i, $entityArray[$i]->getPhsysicianProfileId())
			->setCellValue('E' . $i, $entityArray[$i]->getPhysicianFirstName())
			->setCellValue('F' . $i, $entityArray[$i]->getPhysicianMiddleName())
			->setCellValue('G' . $i, $entityArray[$i]->getPhysicianLastName())
			->setCellValue('H' . $i, $entityArray[$i]->getPhysicianNameSuffix())
			->setCellValue('I' . $i, $entityArray[$i]->getRecipientPrimaryBusinessAddressLine1())
			->setCellValue('J' . $i, $entityArray[$i]->getRecipientPrimaryBusinessAddressLine2())
			->setCellValue('K' . $i, $entityArray[$i]->getRecipientCity())
			->setCellValue('L' . $i, $entityArray[$i]->getRecipientState())
			->setCellValue('M' . $i, $entityArray[$i]->getRecpientZipCode())
			->setCellValue('N' . $i, $entityArray[$i]->getRecpientCountry())
			->setCellValue('O' . $i, $entityArray[$i]->getRecipientProvince())
			->setCellValue('P' . $i, $entityArray[$i]->getRecipientPostCode())
			->setCellValue('Q' . $i, $entityArray[$i]->getPhysicianPrimaryType())
			->setCellValue('R' . $i, $entityArray[$i]->getPhysicianSpeciality())
			->setCellValue('S' . $i, $entityArray[$i]->getPhysicianLicenseState())
			->setCellValue('T' . $i, $entityArray[$i]->getPhysicianLicenseState2())
			->setCellValue('U' . $i, $entityArray[$i]->getPhysicicanLicenseState3())
			->setCellValue('V' . $i, $entityArray[$i]->getPhysicianLicenseState4())
			->setCellValue('W' . $i, $entityArray[$i]->getPhysicianLicenseState5())
			->setCellValue('X' . $i, $entityArray[$i]->getApplicableManufacturerName())
			->setCellValue('Y' . $i, $entityArray[$i]->getApplicableManufacturerId())
			->setCellValue('Z' . $i, $entityArray[$i]->getApplicableManufacturerMakingPaymentName())
			->setCellValue('AA' . $i, $entityArray[$i]->getApplicableManufacturerState())
			->setCellValue('AB' . $i, $entityArray[$i]->getApplicableManufacturerCountry())
			->setCellValue('AC' . $i, $entityArray[$i]->getTotalAmountOfPayment())
			->setCellValue('AD' . $i, $entityArray[$i]->getDateOfPayment())
			->setCellValue('AE' . $i, $entityArray[$i]->getNumberOfPaymentIncludedInTotal())
			->setCellValue('AF' . $i, $entityArray[$i]->getFormOfPaymentOrTransferValue())
			->setCellValue('AG' . $i, $entityArray[$i]->getNatureOfPayment())
			->setCellValue('AH' . $i, $entityArray[$i]->getCityOfTravel())
			->setCellValue('AI' . $i, $entityArray[$i]->getStateOfTravel())
			->setCellValue('AJ' . $i, $entityArray[$i]->getCountryOfTravel())
			->setCellValue('AK' . $i, $entityArray[$i]->getPhysicianOwnershipIndicator())
			->setCellValue('AL' . $i, $entityArray[$i]->getThirdPartyPaymentRecipientIndicator())
			->setCellValue('AM' . $i, $entityArray[$i]->getNameOfThirdPartyRecievingPayment())
			->setCellValue('AN' . $i, $entityArray[$i]->getCharityIndicator())
			->setCellValue('AO' . $i, $entityArray[$i]->getThirdPartyEqualsCoveredRecipientIndcator())
			->setCellValue('AP' . $i, $entityArray[$i]->getContextualInformation())
			->setCellValue('AQ' . $i, $entityArray[$i]->getDelayInPublicationIndicator())
			->setCellValue('AR' . $i, $entityArray[$i]->getRecordId())
			->setCellValue('AS' . $i, $entityArray[$i]->getDisputeStatusForPublication())
			->setCellValue('AT' . $i, $entityArray[$i]->getProductIndicator())
			->setCellValue('AU' . $i, $entityArray[$i]->getNameOfAssociatedCoveredDrug())
			->setCellValue('AV' . $i, $entityArray[$i]->getNameOfAssociatedCoveredDrug2())
			->setCellValue('AW' . $i, $entityArray[$i]->getNameOfAssociatedCoveredDrug3())
			->setCellValue('AX' . $i, $entityArray[$i]->getNameOfAssociatedCoveredDrug4())
			->setCellValue('AY' . $i, $entityArray[$i]->getNameOfAssociatedCoveredDrug5())
			->setCellValue('AZ' . $i, $entityArray[$i]->getNdcOfAssociatedDrug())
			->setCellValue('BA' . $i, $entityArray[$i]->getNdcOfAssociatedDrug2())
			->setCellValue('BB' . $i, $entityArray[$i]->getNdcOfAssociatedDrug3())
			->setCellValue('BC' . $i, $entityArray[$i]->getNdcOfAssociatedDrug4())
			->setCellValue('BD' . $i, $entityArray[$i]->getNdcOfAssociatedDrug5())
			->setCellValue('BE' . $i, $entityArray[$i]->getNameOfCoveredDeviceOrSupply())
			->setCellValue('BF' . $i, $entityArray[$i]->getNameOfCoveredDeviceOrSupply2())
			->setCellValue('BG' . $i, $entityArray[$i]->getNameOfCoveredDeviceOrSupply3())
			->setCellValue('BH' . $i, $entityArray[$i]->getNameOfCoveredDeviceOrSupply4())
			->setCellValue('BI' . $i, $entityArray[$i]->getNameOfCoveredDeviceOrSupply5())
			->setCellValue('BJ' . $i, $entityArray[$i]->getProgramYear())
			->setCellValue('BK' . $i, $entityArray[$i]->getPaymentPublicationDate());			
		}
		return $phpExcelObject;
	}
	
	private function _createExcelHeaderCells($phpExcelObject)
	{
		$phpExcelObject->getActiveSheet()
			->setCellValue('A1', "Covered_Recipient_Type")
			->setCellValue('B1', "Teaching_Hospital_ID")
			->setCellValue('C1', "Teaching_Hospital_Name")
			->setCellValue('D1', "Physician_Profile_ID")
			->setCellValue('E1', "Physician_First_Name")
			->setCellValue('F1', "Physician_Middle_Name")
			->setCellValue('G1', "Physician_Last_Name")
			->setCellValue('H1', "Physician_Name_Suffix")
			->setCellValue('J1', "Recipient_Primary_Business_Street_Address_Line1")
			->setCellValue('K1', "Recipient_Primary_Business_Street_Address_Line2")
			->setCellValue('L1', "Recipient_City")
			->setCellValue('M1', "Recipient_Zip_Code")
			->setCellValue('N1', "Recipient_Country")
			->setCellValue('O1', "Recipient_Province")
			->setCellValue('P1', "Recipient_Postal_Code")
			->setCellValue('Q1', "Physician_Primary_Type")
			->setCellValue('R1', "Physician_Specialty")
			->setCellValue('S1', "Physician_License_State_code1")
			->setCellValue('T1', "Physician_License_State_code2")
			->setCellValue('U1', "Physician_License_State_code3")
			->setCellValue('V1', "Physician_License_State_code4")
			->setCellValue('W1', "Physician_License_State_code5")
			->setCellValue('X1', "Submitting_Applicable_Manufacturer_or_Applicable_GPO_Name")
			->setCellValue('Y1', "Applicable_Manufacturer_or_Applicable_GPO_Making_Payment_ID")
			->setCellValue('Z1', "Applicable_Manufacturer_or_Applicable_GPO_Making_Payment_Name")
			->setCellValue('AA1', "Applicable_Manufacturer_or_Applicable_GPO_Making_Payment_State")
			->setCellValue('AB1', "Applicable_Manufacturer_or_Applicable_GPO_Making_Payment_Country")
			->setCellValue('AC1', "Total_Amount_of_Payment_USDollars")
			->setCellValue('AD1', "Date_of_Payment")
			->setCellValue('AE1', "Number_of_Payments_Included_in_Total_Amount")
			->setCellValue('AF1', "Form_of_Payment_or_Transfer_of_Value")
			->setCellValue('AG1', "Nature_of_Payment_or_Transfer_of_Value")
			->setCellValue('AH1', "City_of_Travel")
			->setCellValue('AI1', "State_of_Travel")
			->setCellValue('AJ1', "Country_of_Travel")
			->setCellValue('AK1', "Physician_Ownership_Indicator")
			->setCellValue('AL1', "Third_Party_Payment_Recipient_Indicator")
			->setCellValue('AM1', "Name_of_Third_Party_Entity_Receiving_Payment_or_Transfer_of_Value")
			->setCellValue('AN1', "Charity_Indicator")
			->setCellValue('AO1', "Third_Party_Equals_Covered_Recipient_Indicator")
			->setCellValue('AP1', "Contextual_Information")
			->setCellValue('AQ1', "Delay_in_Publication_Indicator")
			->setCellValue('AR1', "Record_ID")
			->setCellValue('AS1', "Dispute_Status_for_Publication")
			->setCellValue('AT1', "Product_Indicator")
			->setCellValue('AU1', "Name_of_Associated_Covered_Drug_or_Biological1")
			->setCellValue('AV1', "Name_of_Associated_Covered_Drug_or_Biological2")
			->setCellValue('AW1', "Name_of_Associated_Covered_Drug_or_Biological3")
			->setCellValue('AX1', "Name_of_Associated_Covered_Drug_or_Biological4")
			->setCellValue('AY1', "Name_of_Associated_Covered_Drug_or_Biological5")
			->setCellValue('AZ1', "NDC_of_Associated_Covered_Drug_or_Biological1")
			->setCellValue('BA1', "NDC_of_Associated_Covered_Drug_or_Biological2")
			->setCellValue('BB1', "NDC_of_Associated_Covered_Drug_or_Biological3")
			->setCellValue('BC1', "NDC_of_Associated_Covered_Drug_or_Biological4")
			->setCellValue('BD1', "NDC_of_Associated_Covered_Drug_or_Biological5")
			->setCellValue('BE1', "Name_of_Associated_Covered_Device_or_Medical_Supply1")
			->setCellValue('BF1', "Name_of_Associated_Covered_Device_or_Medical_Supply2")
			->setCellValue('BG1', "Name_of_Associated_Covered_Device_or_Medical_Supply3")
			->setCellValue('BH1', "Name_of_Associated_Covered_Device_or_Medical_Supply4")
			->setCellValue('BI1', "Name_of_Associated_Covered_Device_or_Medical_Supply5")
			->setCellValue('BJ1', "Program_Year")
			->setCellValue('BK1', "Payment_Publication_Date");
		return $phpExcelObject;
	}
}
