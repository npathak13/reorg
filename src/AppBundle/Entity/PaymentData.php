<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaymentData
 *
 * @ORM\Table(name="payment_data")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PaymentDataRepository")
 */
class PaymentData
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="coveredRecipientType", type="string", length=255, nullable=true)
     */
    private $coveredRecipientType;

    /**
     * @var int
     *
     * @ORM\Column(name="TeachingHospitalId", type="integer", nullable=true)
     */
    private $teachingHospitalId;

    /**
     * @var string
     *
     * @ORM\Column(name="teachingHospitalName", type="string", length=255, nullable=true)
     */
    private $teachingHospitalName;

    /**
     * @var int
     *
     * @ORM\Column(name="phsysicianProfileId", type="integer", nullable=true)
     */
    private $phsysicianProfileId;

    /**
     * @var string
     *
     * @ORM\Column(name="physicianFirstName", type="string", length=255, nullable=true)
     */
    private $physicianFirstName;
    
    /**
     * @var string
     *
     * @ORM\Column(name="physicianMiddleName", type="string", length=255, nullable=true)
     */
    private $physicianMiddleName;

    /**
     * @var string
     *
     * @ORM\Column(name="physicianLastName", type="string", length=255, nullable=true)
     */
    private $physicianLastName;

    /**
     * @var string
     *
     * @ORM\Column(name="physicianNameSuffix", type="string", length=255, nullable=true)
     */
    private $physicianNameSuffix;

    /**
     * @var string
     *
     * @ORM\Column(name="recipientPrimaryBusinessAddressLine1", type="string", length=255, nullable=true)
     */
    private $recipientPrimaryBusinessAddressLine1;

    /**
     * @var string
     *
     * @ORM\Column(name="recipientPrimaryBusinessAddressLine2", type="string", length=255, nullable=true)
     */
    private $recipientPrimaryBusinessAddressLine2;

    /**
     * @var string
     *
     * @ORM\Column(name="recipientCity", type="string", length=255, nullable=true)
     */
    private $recipientCity;

    /**
     * @var string
     *
     * @ORM\Column(name="recipientState", type="string", length=2, nullable=true)
     */
    private $recipientState;

    /**
     * @var string
     *
     * @ORM\Column(name="recpientZipCode", type="string", length=255, nullable=true)
     */
    private $recpientZipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="recpientCountry", type="string", length=255, nullable=true)
     */
    private $recpientCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="recipientProvince", type="string", length=255, nullable=true)
     */
    private $recipientProvince;

    /**
     * @var string
     *
     * @ORM\Column(name="recipientPostCode", type="string", length=255, nullable=true)
     */
    private $recipientPostCode;

    /**
     * @var string
     *
     * @ORM\Column(name="physicianPrimaryType", type="string", length=255, nullable=true)
     */
    private $physicianPrimaryType;

    /**
     * @var string
     *
     * @ORM\Column(name="physicianSpeciality", type="string", length=255, nullable=true)
     */
    private $physicianSpeciality;

    /**
     * @var string
     *
     * @ORM\Column(name="physicianLicenseState", type="string", length=2, nullable=true)
     */
    private $physicianLicenseState;

    /**
     * @var string
     *
     * @ORM\Column(name="physicianLicenseState2", type="string", length=2, nullable=true)
     */
    private $physicianLicenseState2;

    /**
     * @var string
     *
     * @ORM\Column(name="physicicanLicenseState3", type="string", length=2, nullable=true)
     */
    private $physicicanLicenseState3;

    /**
     * @var string
     *
     * @ORM\Column(name="physicianLicenseState4", type="string", length=2, nullable=true)
     */
    private $physicianLicenseState4;

    /**
     * @var string
     *
     * @ORM\Column(name="physicianLicenseState5", type="string", length=2, nullable=true)
     */
    private $physicianLicenseState5;

    /**
     * @var string
     *
     * @ORM\Column(name="applicableManufacturerName", type="string", length=255, nullable=true)
     */
    private $applicableManufacturerName;

    /**
     * @var int
     *
     * @ORM\Column(name="applicableManufacturerId", type="integer", nullable=true)
     */
    private $applicableManufacturerId;

    /**
     * @var string
     *
     * @ORM\Column(name="applicableManufacturerMakingPaymentName", type="string", length=255, nullable=true)
     */
    private $applicableManufacturerMakingPaymentName;

    /**
     * @var string
     *
     * @ORM\Column(name="applicableManufacturerState", type="string", length=2, nullable=true)
     */
    private $applicableManufacturerState;

    /**
     * @var string
     *
     * @ORM\Column(name="applicableManufacturerCountry", type="string", length=255, nullable=true)
     */
    private $applicableManufacturerCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="totalAmountOfPayment", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $totalAmountOfPayment;

    /**
     *
     * @ORM\Column(name="dateOfPayment", type="string", nullable=true)
     */
    private $dateOfPayment;

    /**
     * @var int
     *
     * @ORM\Column(name="numberOfPaymentIncludedInTotal", type="integer", nullable=true)
     */
    private $numberOfPaymentIncludedInTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="formOfPaymentOrTransferValue", type="string", length=255, nullable=true)
     */
    private $formOfPaymentOrTransferValue;

    /**
     * @var string
     *
     * @ORM\Column(name="natureOfPayment", type="string", length=255, nullable=true)
     */
    private $natureOfPayment;

    /**
     * @var string
     *
     * @ORM\Column(name="cityOfTravel", type="string", length=255, nullable=true)
     */
    private $cityOfTravel;

    /**
     * @var string
     *
     * @ORM\Column(name="stateOfTravel", type="string", length=2, nullable=true)
     */
    private $stateOfTravel;

    /**
     * @var string
     *
     * @ORM\Column(name="countryOfTravel", type="string", length=255, nullable=true)
     */
    private $countryOfTravel;

    /**
     * @var bool
     *
     * @ORM\Column(name="physicianOwnershipIndicator", type="boolean", nullable=true)
     */
    private $physicianOwnershipIndicator;

    /**
     * @var string
     *
     * @ORM\Column(name="thirdPartyPaymentRecipientIndicator", type="string", length=255, nullable=true)
     */
    private $thirdPartyPaymentRecipientIndicator;

    /**
     * @var string
     *
     * @ORM\Column(name="nameOfThirdPartyRecievingPayment", type="string", length=255, nullable=true)
     */
    private $nameOfThirdPartyRecievingPayment;

    /**
     * @var bool
     *
     * @ORM\Column(name="charityIndicator", type="boolean", nullable=true)
     */
    private $charityIndicator;

    /**
     * @var string
     *
     * @ORM\Column(name="thirdPartyEqualsCoveredRecipientIndcator", type="string", length=255, nullable=true)
     */
    private $thirdPartyEqualsCoveredRecipientIndcator;

    /**
     * @var string
     *
     * @ORM\Column(name="contextualInformation", type="string", length=255, nullable=true)
     */
    private $contextualInformation;

    /**
     * @var bool
     *
     * @ORM\Column(name="delayInPublicationIndicator", type="boolean", nullable=true)
     */
    private $delayInPublicationIndicator;

    /**
     * @var int
     *
     * @ORM\Column(name="recordId", type="integer")
     */
    private $recordId;

    /**
     * @var bool
     *
     * @ORM\Column(name="disputeStatusForPublication", type="boolean", nullable=true)
     */
    private $disputeStatusForPublication;

    /**
     * @var string
     *
     * @ORM\Column(name="productIndicator", type="string", length=255, nullable=true)
     */
    private $productIndicator;

    /**
     * @var string
     *
     * @ORM\Column(name="nameOfAssociatedCoveredDrug", type="string", length=255, nullable=true)
     */
    private $nameOfAssociatedCoveredDrug;

    /**
     * @var string
     *
     * @ORM\Column(name="nameOfAssociatedCoveredDrug2", type="string", length=255, nullable=true)
     */
    private $nameOfAssociatedCoveredDrug2;

    /**
     * @var string
     *
     * @ORM\Column(name="nameOfAssociatedCoveredDrug3", type="string", length=255, nullable=true)
     */
    private $nameOfAssociatedCoveredDrug3;

    /**
     * @var string
     *
     * @ORM\Column(name="nameOfAssociatedCoveredDrug4", type="string", length=255, nullable=true)
     */
    private $nameOfAssociatedCoveredDrug4;

    /**
     * @var string
     *
     * @ORM\Column(name="nameOfAssociatedCoveredDrug5", type="string", length=255, nullable=true)
     */
    private $nameOfAssociatedCoveredDrug5;

    /**
     * @var string
     *
     * @ORM\Column(name="ndcOfAssociatedDrug", type="string", length=255, nullable=true)
     */
    private $ndcOfAssociatedDrug;

    /**
     * @var string
     *
     * @ORM\Column(name="ndcOfAssociatedDrug2", type="string", length=255, nullable=true)
     */
    private $ndcOfAssociatedDrug2;

    /**
     * @var string
     *
     * @ORM\Column(name="ndcOfAssociatedDrug3", type="string", length=255, nullable=true)
     */
    private $ndcOfAssociatedDrug3;

    /**
     * @var string
     *
     * @ORM\Column(name="ndcOfAssociatedDrug4", type="string", length=255, nullable=true)
     */
    private $ndcOfAssociatedDrug4;

    /**
     * @var string
     *
     * @ORM\Column(name="ndcOfAssociatedDrug5", type="string", length=255, nullable=true)
     */
    private $ndcOfAssociatedDrug5;

    /**
     * @var string
     *
     * @ORM\Column(name="nameOfCoveredDeviceOrSupply", type="string", length=255, nullable=true)
     */
    private $nameOfCoveredDeviceOrSupply;

    /**
     * @var string
     *
     * @ORM\Column(name="nameOfCoveredDeviceOrSupply2", type="string", length=255, nullable=true)
     */
    private $nameOfCoveredDeviceOrSupply2;

    /**
     * @var string
     *
     * @ORM\Column(name="nameOfCoveredDeviceOrSupply3", type="string", length=255, nullable=true)
     */
    private $nameOfCoveredDeviceOrSupply3;

    /**
     * @var string
     *
     * @ORM\Column(name="nameOfCoveredDeviceOrSupply4", type="string", length=255, nullable=true)
     */
    private $nameOfCoveredDeviceOrSupply4;

    /**
     * @var string
     *
     * @ORM\Column(name="nameOfCoveredDeviceOrSupply5", type="string", length=255, nullable=true)
     */
    private $nameOfCoveredDeviceOrSupply5;

    /**
     * @var int
     *
     * @ORM\Column(name="programYear", type="integer", nullable=true)
     */
    private $programYear;

    /**
     * @var \string
     *
     * @ORM\Column(name="paymentPublicationDate", type="string", nullable=true)
     */
    private $paymentPublicationDate;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set coveredRecipientType
     *
     * @param string $coveredRecipientType
     * @return PaymentData
     */
    public function setCoveredRecipientType($coveredRecipientType)
    {
        $this->coveredRecipientType = $coveredRecipientType;

        return $this;
    }

    /**
     * Get coveredRecipientType
     *
     * @return string 
     */
    public function getCoveredRecipientType()
    {
        return $this->coveredRecipientType;
    }

    /**
     * Set teachingHospitalId
     *
     * @param integer $teachingHospitalId
     * @return PaymentData
     */
    public function setTeachingHospitalId($teachingHospitalId)
    {
        $this->teachingHospitalId = $teachingHospitalId;

        return $this;
    }

    /**
     * Get teachingHospitalId
     *
     * @return integer 
     */
    public function getTeachingHospitalId()
    {
        return $this->teachingHospitalId;
    }

    /**
     * Set teachingHospitalName
     *
     * @param string $teachingHospitalName
     * @return PaymentData
     */
    public function setTeachingHospitalName($teachingHospitalName)
    {
        $this->teachingHospitalName = $teachingHospitalName;

        return $this;
    }

    /**
     * Get teachingHospitalName
     *
     * @return string 
     */
    public function getTeachingHospitalName()
    {
        return $this->teachingHospitalName;
    }

    /**
     * Set phsysicianProfileId
     *
     * @param integer $phsysicianProfileId
     * @return PaymentData
     */
    public function setPhsysicianProfileId($phsysicianProfileId)
    {
        $this->phsysicianProfileId = $phsysicianProfileId;

        return $this;
    }

    /**
     * Get phsysicianProfileId
     *
     * @return integer 
     */
    public function getPhsysicianProfileId()
    {
        return $this->phsysicianProfileId;
    }

    /**
     * Set physicianFirstName
     *
     * @param string $physicianFirstName
     * @return PaymentData
     */
    public function setPhysicianFirstName($physicianFirstName)
    {
        $this->physicianFirstName = $physicianFirstName;

        return $this;
    }

    /**
     * Get physicianFirstName
     *
     * @return string 
     */
    public function getPhysicianFirstName()
    {
        return $this->physicianFirstName;
    }

    /**
     * Set physicianLastName
     *
     * @param string $physicianLastName
     * @return PaymentData
     */
    public function setPhysicianLastName($physicianLastName)
    {
        $this->physicianLastName = $physicianLastName;

        return $this;
    }

    /**
     * Get physicianLastName
     *
     * @return string 
     */
    public function getPhysicianLastName()
    {
        return $this->physicianLastName;
    }

    /**
     * Set physicianNameSuffix
     *
     * @param string $physicianNameSuffix
     * @return PaymentData
     */
    public function setPhysicianNameSuffix($physicianNameSuffix)
    {
        $this->physicianNameSuffix = $physicianNameSuffix;

        return $this;
    }

    /**
     * Get physicianNameSuffix
     *
     * @return string 
     */
    public function getPhysicianNameSuffix()
    {
        return $this->physicianNameSuffix;
    }

    /**
     * Set recipientPrimaryBusinessAddressLine1
     *
     * @param string $recipientPrimaryBusinessAddressLine1
     * @return PaymentData
     */
    public function setRecipientPrimaryBusinessAddressLine1($recipientPrimaryBusinessAddressLine1)
    {
        $this->recipientPrimaryBusinessAddressLine1 = $recipientPrimaryBusinessAddressLine1;

        return $this;
    }

    /**
     * Get recipientPrimaryBusinessAddressLine1
     *
     * @return string 
     */
    public function getRecipientPrimaryBusinessAddressLine1()
    {
        return $this->recipientPrimaryBusinessAddressLine1;
    }

    /**
     * Set recipientPrimaryBusinessAddressLine2
     *
     * @param string $recipientPrimaryBusinessAddressLine2
     * @return PaymentData
     */
    public function setRecipientPrimaryBusinessAddressLine2($recipientPrimaryBusinessAddressLine2)
    {
        $this->recipientPrimaryBusinessAddressLine2 = $recipientPrimaryBusinessAddressLine2;

        return $this;
    }

    /**
     * Get recipientPrimaryBusinessAddressLine2
     *
     * @return string 
     */
    public function getRecipientPrimaryBusinessAddressLine2()
    {
        return $this->recipientPrimaryBusinessAddressLine2;
    }

    /**
     * Set recipientCity
     *
     * @param string $recipientCity
     * @return PaymentData
     */
    public function setRecipientCity($recipientCity)
    {
        $this->recipientCity = $recipientCity;

        return $this;
    }

    /**
     * Get recipientCity
     *
     * @return string 
     */
    public function getRecipientCity()
    {
        return $this->recipientCity;
    }

    /**
     * Set recipientState
     *
     * @param string $recipientState
     * @return PaymentData
     */
    public function setRecipientState($recipientState)
    {
        $this->recipientState = $recipientState;

        return $this;
    }

    /**
     * Get recipientState
     *
     * @return string 
     */
    public function getRecipientState()
    {
        return $this->recipientState;
    }

    /**
     * Set recpientZipCode
     *
     * @param string $recpientZipCode
     * @return PaymentData
     */
    public function setRecpientZipCode($recpientZipCode)
    {
        $this->recpientZipCode = $recpientZipCode;

        return $this;
    }

    /**
     * Get recpientZipCode
     *
     * @return string 
     */
    public function getRecpientZipCode()
    {
        return $this->recpientZipCode;
    }

    /**
     * Set recpientCountry
     *
     * @param string $recpientCountry
     * @return PaymentData
     */
    public function setRecpientCountry($recpientCountry)
    {
        $this->recpientCountry = $recpientCountry;

        return $this;
    }

    /**
     * Get recpientCountry
     *
     * @return string 
     */
    public function getRecpientCountry()
    {
        return $this->recpientCountry;
    }

    /**
     * Set recipientProvince
     *
     * @param string $recipientProvince
     * @return PaymentData
     */
    public function setRecipientProvince($recipientProvince)
    {
        $this->recipientProvince = $recipientProvince;

        return $this;
    }

    /**
     * Get recipientProvince
     *
     * @return string 
     */
    public function getRecipientProvince()
    {
        return $this->recipientProvince;
    }

    /**
     * Set recipientPostCode
     *
     * @param string $recipientPostCode
     * @return PaymentData
     */
    public function setRecipientPostCode($recipientPostCode)
    {
        $this->recipientPostCode = $recipientPostCode;

        return $this;
    }

    /**
     * Get recipientPostCode
     *
     * @return string 
     */
    public function getRecipientPostCode()
    {
        return $this->recipientPostCode;
    }

    /**
     * Set physicianPrimaryType
     *
     * @param string $physicianPrimaryType
     * @return PaymentData
     */
    public function setPhysicianPrimaryType($physicianPrimaryType)
    {
        $this->physicianPrimaryType = $physicianPrimaryType;

        return $this;
    }

    /**
     * Get physicianPrimaryType
     *
     * @return string 
     */
    public function getPhysicianPrimaryType()
    {
        return $this->physicianPrimaryType;
    }

    /**
     * Set physicianSpeciality
     *
     * @param string $physicianSpeciality
     * @return PaymentData
     */
    public function setPhysicianSpeciality($physicianSpeciality)
    {
        $this->physicianSpeciality = $physicianSpeciality;

        return $this;
    }

    /**
     * Get physicianSpeciality
     *
     * @return string 
     */
    public function getPhysicianSpeciality()
    {
        return $this->physicianSpeciality;
    }

    /**
     * Set physicianLicenseState
     *
     * @param string $physicianLicenseState
     * @return PaymentData
     */
    public function setPhysicianLicenseState($physicianLicenseState)
    {
        $this->physicianLicenseState = $physicianLicenseState;

        return $this;
    }

    /**
     * Get physicianLicenseState
     *
     * @return string 
     */
    public function getPhysicianLicenseState()
    {
        return $this->physicianLicenseState;
    }

    /**
     * Set physicianLicenseState2
     *
     * @param string $physicianLicenseState2
     * @return PaymentData
     */
    public function setPhysicianLicenseState2($physicianLicenseState2)
    {
        $this->physicianLicenseState2 = $physicianLicenseState2;

        return $this;
    }

    /**
     * Get physicianLicenseState2
     *
     * @return string 
     */
    public function getPhysicianLicenseState2()
    {
        return $this->physicianLicenseState2;
    }

    /**
     * Set physicicanLicenseState3
     *
     * @param string $physicicanLicenseState3
     * @return PaymentData
     */
    public function setPhysicicanLicenseState3($physicicanLicenseState3)
    {
        $this->physicicanLicenseState3 = $physicicanLicenseState3;

        return $this;
    }

    /**
     * Get physicicanLicenseState3
     *
     * @return string 
     */
    public function getPhysicicanLicenseState3()
    {
        return $this->physicicanLicenseState3;
    }

    /**
     * Set physicianLicenseState4
     *
     * @param string $physicianLicenseState4
     * @return PaymentData
     */
    public function setPhysicianLicenseState4($physicianLicenseState4)
    {
        $this->physicianLicenseState4 = $physicianLicenseState4;

        return $this;
    }

    /**
     * Get physicianLicenseState4
     *
     * @return string 
     */
    public function getPhysicianLicenseState4()
    {
        return $this->physicianLicenseState4;
    }

    /**
     * Set physicianLicenseState5
     *
     * @param string $physicianLicenseState5
     * @return PaymentData
     */
    public function setPhysicianLicenseState5($physicianLicenseState5)
    {
        $this->physicianLicenseState5 = $physicianLicenseState5;

        return $this;
    }

    /**
     * Get physicianLicenseState5
     *
     * @return string 
     */
    public function getPhysicianLicenseState5()
    {
        return $this->physicianLicenseState5;
    }

    /**
     * Set applicableManufacturerName
     *
     * @param string $applicableManufacturerName
     * @return PaymentData
     */
    public function setApplicableManufacturerName($applicableManufacturerName)
    {
        $this->applicableManufacturerName = $applicableManufacturerName;

        return $this;
    }

    /**
     * Get applicableManufacturerName
     *
     * @return string 
     */
    public function getApplicableManufacturerName()
    {
        return $this->applicableManufacturerName;
    }

    /**
     * Set applicableManufacturerId
     *
     * @param integer $applicableManufacturerId
     * @return PaymentData
     */
    public function setApplicableManufacturerId($applicableManufacturerId)
    {
        $this->applicableManufacturerId = $applicableManufacturerId;

        return $this;
    }

    /**
     * Get applicableManufacturerId
     *
     * @return integer 
     */
    public function getApplicableManufacturerId()
    {
        return $this->applicableManufacturerId;
    }

    /**
     * Set applicableManufacturerMakingPaymentName
     *
     * @param string $applicableManufacturerMakingPaymentName
     * @return PaymentData
     */
    public function setApplicableManufacturerMakingPaymentName($applicableManufacturerMakingPaymentName)
    {
        $this->applicableManufacturerMakingPaymentName = $applicableManufacturerMakingPaymentName;

        return $this;
    }

    /**
     * Get applicableManufacturerMakingPaymentName
     *
     * @return string 
     */
    public function getApplicableManufacturerMakingPaymentName()
    {
        return $this->applicableManufacturerMakingPaymentName;
    }

    /**
     * Set applicableManufacturerState
     *
     * @param string $applicableManufacturerState
     * @return PaymentData
     */
    public function setApplicableManufacturerState($applicableManufacturerState)
    {
        $this->applicableManufacturerState = $applicableManufacturerState;

        return $this;
    }

    /**
     * Get applicableManufacturerState
     *
     * @return string 
     */
    public function getApplicableManufacturerState()
    {
        return $this->applicableManufacturerState;
    }

    /**
     * Set applicableManufacturerCountry
     *
     * @param string $applicableManufacturerCountry
     * @return PaymentData
     */
    public function setApplicableManufacturerCountry($applicableManufacturerCountry)
    {
        $this->applicableManufacturerCountry = $applicableManufacturerCountry;

        return $this;
    }

    /**
     * Get applicableManufacturerCountry
     *
     * @return string 
     */
    public function getApplicableManufacturerCountry()
    {
        return $this->applicableManufacturerCountry;
    }

    /**
     * Set totalAmountOfPayment
     *
     * @param string $totalAmountOfPayment
     * @return PaymentData
     */
    public function setTotalAmountOfPayment($totalAmountOfPayment)
    {
        $this->totalAmountOfPayment = $totalAmountOfPayment;

        return $this;
    }

    /**
     * Get totalAmountOfPayment
     *
     * @return string 
     */
    public function getTotalAmountOfPayment()
    {
        return $this->totalAmountOfPayment;
    }

    /**
     * Set numberOfPaymentIncludedInTotal
     *
     * @param integer $numberOfPaymentIncludedInTotal
     * @return PaymentData
     */
    public function setNumberOfPaymentIncludedInTotal($numberOfPaymentIncludedInTotal)
    {
        $this->numberOfPaymentIncludedInTotal = $numberOfPaymentIncludedInTotal;

        return $this;
    }

    /**
     * Get numberOfPaymentIncludedInTotal
     *
     * @return integer 
     */
    public function getNumberOfPaymentIncludedInTotal()
    {
        return $this->numberOfPaymentIncludedInTotal;
    }

    /**
     * Set formOfPaymentOrTransferValue
     *
     * @param string $formOfPaymentOrTransferValue
     * @return PaymentData
     */
    public function setFormOfPaymentOrTransferValue($formOfPaymentOrTransferValue)
    {
        $this->formOfPaymentOrTransferValue = $formOfPaymentOrTransferValue;

        return $this;
    }

    /**
     * Get formOfPaymentOrTransferValue
     *
     * @return string 
     */
    public function getFormOfPaymentOrTransferValue()
    {
        return $this->formOfPaymentOrTransferValue;
    }

    /**
     * Set natureOfPayment
     *
     * @param string $natureOfPayment
     * @return PaymentData
     */
    public function setNatureOfPayment($natureOfPayment)
    {
        $this->natureOfPayment = $natureOfPayment;

        return $this;
    }

    /**
     * Get natureOfPayment
     *
     * @return string 
     */
    public function getNatureOfPayment()
    {
        return $this->natureOfPayment;
    }

    /**
     * Set cityOfTravel
     *
     * @param string $cityOfTravel
     * @return PaymentData
     */
    public function setCityOfTravel($cityOfTravel)
    {
        $this->cityOfTravel = $cityOfTravel;

        return $this;
    }

    /**
     * Get cityOfTravel
     *
     * @return string 
     */
    public function getCityOfTravel()
    {
        return $this->cityOfTravel;
    }

    /**
     * Set stateOfTravel
     *
     * @param string $stateOfTravel
     * @return PaymentData
     */
    public function setStateOfTravel($stateOfTravel)
    {
        $this->stateOfTravel = $stateOfTravel;

        return $this;
    }

    /**
     * Get stateOfTravel
     *
     * @return string 
     */
    public function getStateOfTravel()
    {
        return $this->stateOfTravel;
    }

    /**
     * Set countryOfTravel
     *
     * @param string $countryOfTravel
     * @return PaymentData
     */
    public function setCountryOfTravel($countryOfTravel)
    {
        $this->countryOfTravel = $countryOfTravel;

        return $this;
    }

    /**
     * Get countryOfTravel
     *
     * @return string 
     */
    public function getCountryOfTravel()
    {
        return $this->countryOfTravel;
    }

    /**
     * Set physicianOwnershipIndicator
     *
     * @param boolean $physicianOwnershipIndicator
     * @return PaymentData
     */
    public function setPhysicianOwnershipIndicator($physicianOwnershipIndicator)
    {
        $this->physicianOwnershipIndicator = $physicianOwnershipIndicator;

        return $this;
    }

    /**
     * Get physicianOwnershipIndicator
     *
     * @return boolean 
     */
    public function getPhysicianOwnershipIndicator()
    {
        return $this->physicianOwnershipIndicator;
    }

    /**
     * Set thirdPartyPaymentRecipientIndicator
     *
     * @param string $thirdPartyPaymentRecipientIndicator
     * @return PaymentData
     */
    public function setThirdPartyPaymentRecipientIndicator($thirdPartyPaymentRecipientIndicator)
    {
        $this->thirdPartyPaymentRecipientIndicator = $thirdPartyPaymentRecipientIndicator;

        return $this;
    }

    /**
     * Get thirdPartyPaymentRecipientIndicator
     *
     * @return string 
     */
    public function getThirdPartyPaymentRecipientIndicator()
    {
        return $this->thirdPartyPaymentRecipientIndicator;
    }

    /**
     * Set nameOfThirdPartyRecievingPayment
     *
     * @param string $nameOfThirdPartyRecievingPayment
     * @return PaymentData
     */
    public function setNameOfThirdPartyRecievingPayment($nameOfThirdPartyRecievingPayment)
    {
        $this->nameOfThirdPartyRecievingPayment = $nameOfThirdPartyRecievingPayment;

        return $this;
    }

    /**
     * Get nameOfThirdPartyRecievingPayment
     *
     * @return string 
     */
    public function getNameOfThirdPartyRecievingPayment()
    {
        return $this->nameOfThirdPartyRecievingPayment;
    }

    /**
     * Set charityIndicator
     *
     * @param boolean $charityIndicator
     * @return PaymentData
     */
    public function setCharityIndicator($charityIndicator)
    {
        $this->charityIndicator = $charityIndicator;

        return $this;
    }

    /**
     * Get charityIndicator
     *
     * @return boolean 
     */
    public function getCharityIndicator()
    {
        return $this->charityIndicator;
    }

    /**
     * Set thirdPartyEqualsCoveredRecipientIndcator
     *
     * @param string $thirdPartyEqualsCoveredRecipientIndcator
     * @return PaymentData
     */
    public function setThirdPartyEqualsCoveredRecipientIndcator($thirdPartyEqualsCoveredRecipientIndcator)
    {
        $this->thirdPartyEqualsCoveredRecipientIndcator = $thirdPartyEqualsCoveredRecipientIndcator;

        return $this;
    }

    /**
     * Get thirdPartyEqualsCoveredRecipientIndcator
     *
     * @return string 
     */
    public function getThirdPartyEqualsCoveredRecipientIndcator()
    {
        return $this->thirdPartyEqualsCoveredRecipientIndcator;
    }

    /**
     * Set contextualInformation
     *
     * @param string $contextualInformation
     * @return PaymentData
     */
    public function setContextualInformation($contextualInformation)
    {
        $this->contextualInformation = $contextualInformation;

        return $this;
    }

    /**
     * Get contextualInformation
     *
     * @return string 
     */
    public function getContextualInformation()
    {
        return $this->contextualInformation;
    }

    /**
     * Set delayInPublicationIndicator
     *
     * @param boolean $delayInPublicationIndicator
     * @return PaymentData
     */
    public function setDelayInPublicationIndicator($delayInPublicationIndicator)
    {
        $this->delayInPublicationIndicator = $delayInPublicationIndicator;

        return $this;
    }

    /**
     * Get delayInPublicationIndicator
     *
     * @return boolean 
     */
    public function getDelayInPublicationIndicator()
    {
        return $this->delayInPublicationIndicator;
    }

    /**
     * Set recordId
     *
     * @param integer $recordId
     * @return PaymentData
     */
    public function setRecordId($recordId)
    {
        $this->recordId = $recordId;

        return $this;
    }

    /**
     * Get recordId
     *
     * @return integer 
     */
    public function getRecordId()
    {
        return $this->recordId;
    }

    /**
     * Set disputeStatusForPublication
     *
     * @param boolean $disputeStatusForPublication
     * @return PaymentData
     */
    public function setDisputeStatusForPublication($disputeStatusForPublication)
    {
        $this->disputeStatusForPublication = $disputeStatusForPublication;

        return $this;
    }

    /**
     * Get disputeStatusForPublication
     *
     * @return boolean 
     */
    public function getDisputeStatusForPublication()
    {
        return $this->disputeStatusForPublication;
    }

    /**
     * Set productIndicator
     *
     * @param string $productIndicator
     * @return PaymentData
     */
    public function setProductIndicator($productIndicator)
    {
        $this->productIndicator = $productIndicator;

        return $this;
    }

    /**
     * Get productIndicator
     *
     * @return string 
     */
    public function getProductIndicator()
    {
        return $this->productIndicator;
    }

    /**
     * Set nameOfAssociatedCoveredDrug
     *
     * @param string $nameOfAssociatedCoveredDrug
     * @return PaymentData
     */
    public function setNameOfAssociatedCoveredDrug($nameOfAssociatedCoveredDrug)
    {
        $this->nameOfAssociatedCoveredDrug = $nameOfAssociatedCoveredDrug;

        return $this;
    }

    /**
     * Get nameOfAssociatedCoveredDrug
     *
     * @return string 
     */
    public function getNameOfAssociatedCoveredDrug()
    {
        return $this->nameOfAssociatedCoveredDrug;
    }

    /**
     * Set nameOfAssociatedCoveredDrug2
     *
     * @param string $nameOfAssociatedCoveredDrug2
     * @return PaymentData
     */
    public function setNameOfAssociatedCoveredDrug2($nameOfAssociatedCoveredDrug2)
    {
        $this->nameOfAssociatedCoveredDrug2 = $nameOfAssociatedCoveredDrug2;

        return $this;
    }

    /**
     * Get nameOfAssociatedCoveredDrug2
     *
     * @return string 
     */
    public function getNameOfAssociatedCoveredDrug2()
    {
        return $this->nameOfAssociatedCoveredDrug2;
    }

    /**
     * Set nameOfAssociatedCoveredDrug3
     *
     * @param string $nameOfAssociatedCoveredDrug3
     * @return PaymentData
     */
    public function setNameOfAssociatedCoveredDrug3($nameOfAssociatedCoveredDrug3)
    {
        $this->nameOfAssociatedCoveredDrug3 = $nameOfAssociatedCoveredDrug3;

        return $this;
    }

    /**
     * Get nameOfAssociatedCoveredDrug3
     *
     * @return string 
     */
    public function getNameOfAssociatedCoveredDrug3()
    {
        return $this->nameOfAssociatedCoveredDrug3;
    }

    /**
     * Set nameOfAssociatedCoveredDrug4
     *
     * @param string $nameOfAssociatedCoveredDrug4
     * @return PaymentData
     */
    public function setNameOfAssociatedCoveredDrug4($nameOfAssociatedCoveredDrug4)
    {
        $this->nameOfAssociatedCoveredDrug4 = $nameOfAssociatedCoveredDrug4;

        return $this;
    }

    /**
     * Get nameOfAssociatedCoveredDrug4
     *
     * @return string 
     */
    public function getNameOfAssociatedCoveredDrug4()
    {
        return $this->nameOfAssociatedCoveredDrug4;
    }

    /**
     * Set nameOfAssociatedCoveredDrug5
     *
     * @param string $nameOfAssociatedCoveredDrug5
     * @return PaymentData
     */
    public function setNameOfAssociatedCoveredDrug5($nameOfAssociatedCoveredDrug5)
    {
        $this->nameOfAssociatedCoveredDrug5 = $nameOfAssociatedCoveredDrug5;

        return $this;
    }

    /**
     * Get nameOfAssociatedCoveredDrug5
     *
     * @return string 
     */
    public function getNameOfAssociatedCoveredDrug5()
    {
        return $this->nameOfAssociatedCoveredDrug5;
    }

    /**
     * Set ndcOfAssociatedDrug
     *
     * @param string $ndcOfAssociatedDrug
     * @return PaymentData
     */
    public function setNdcOfAssociatedDrug($ndcOfAssociatedDrug)
    {
        $this->ndcOfAssociatedDrug = $ndcOfAssociatedDrug;

        return $this;
    }

    /**
     * Get ndcOfAssociatedDrug
     *
     * @return string 
     */
    public function getNdcOfAssociatedDrug()
    {
        return $this->ndcOfAssociatedDrug;
    }

    /**
     * Set ndcOfAssociatedDrug2
     *
     * @param string $ndcOfAssociatedDrug2
     * @return PaymentData
     */
    public function setNdcOfAssociatedDrug2($ndcOfAssociatedDrug2)
    {
        $this->ndcOfAssociatedDrug2 = $ndcOfAssociatedDrug2;

        return $this;
    }

    /**
     * Get ndcOfAssociatedDrug2
     *
     * @return string 
     */
    public function getNdcOfAssociatedDrug2()
    {
        return $this->ndcOfAssociatedDrug2;
    }

    /**
     * Set ndcOfAssociatedDrug3
     *
     * @param string $ndcOfAssociatedDrug3
     * @return PaymentData
     */
    public function setNdcOfAssociatedDrug3($ndcOfAssociatedDrug3)
    {
        $this->ndcOfAssociatedDrug3 = $ndcOfAssociatedDrug3;

        return $this;
    }

    /**
     * Get ndcOfAssociatedDrug3
     *
     * @return string 
     */
    public function getNdcOfAssociatedDrug3()
    {
        return $this->ndcOfAssociatedDrug3;
    }

    /**
     * Set ndcOfAssociatedDrug4
     *
     * @param string $ndcOfAssociatedDrug4
     * @return PaymentData
     */
    public function setNdcOfAssociatedDrug4($ndcOfAssociatedDrug4)
    {
        $this->ndcOfAssociatedDrug4 = $ndcOfAssociatedDrug4;

        return $this;
    }

    /**
     * Get ndcOfAssociatedDrug4
     *
     * @return string 
     */
    public function getNdcOfAssociatedDrug4()
    {
        return $this->ndcOfAssociatedDrug4;
    }

    /**
     * Set ndcOfAssociatedDrug5
     *
     * @param string $ndcOfAssociatedDrug5
     * @return PaymentData
     */
    public function setNdcOfAssociatedDrug5($ndcOfAssociatedDrug5)
    {
        $this->ndcOfAssociatedDrug5 = $ndcOfAssociatedDrug5;

        return $this;
    }

    /**
     * Get ndcOfAssociatedDrug5
     *
     * @return string 
     */
    public function getNdcOfAssociatedDrug5()
    {
        return $this->ndcOfAssociatedDrug5;
    }

    /**
     * Set nameOfCoveredDeviceOrSupply
     *
     * @param string $nameOfCoveredDeviceOrSupply
     * @return PaymentData
     */
    public function setNameOfCoveredDeviceOrSupply($nameOfCoveredDeviceOrSupply)
    {
        $this->nameOfCoveredDeviceOrSupply = $nameOfCoveredDeviceOrSupply;

        return $this;
    }

    /**
     * Get nameOfCoveredDeviceOrSupply
     *
     * @return string 
     */
    public function getNameOfCoveredDeviceOrSupply()
    {
        return $this->nameOfCoveredDeviceOrSupply;
    }

    /**
     * Set nameOfCoveredDeviceOrSupply2
     *
     * @param string $nameOfCoveredDeviceOrSupply2
     * @return PaymentData
     */
    public function setNameOfCoveredDeviceOrSupply2($nameOfCoveredDeviceOrSupply2)
    {
        $this->nameOfCoveredDeviceOrSupply2 = $nameOfCoveredDeviceOrSupply2;

        return $this;
    }

    /**
     * Get nameOfCoveredDeviceOrSupply2
     *
     * @return string 
     */
    public function getNameOfCoveredDeviceOrSupply2()
    {
        return $this->nameOfCoveredDeviceOrSupply2;
    }

    /**
     * Set nameOfCoveredDeviceOrSupply3
     *
     * @param string $nameOfCoveredDeviceOrSupply3
     * @return PaymentData
     */
    public function setNameOfCoveredDeviceOrSupply3($nameOfCoveredDeviceOrSupply3)
    {
        $this->nameOfCoveredDeviceOrSupply3 = $nameOfCoveredDeviceOrSupply3;

        return $this;
    }

    /**
     * Get nameOfCoveredDeviceOrSupply3
     *
     * @return string 
     */
    public function getNameOfCoveredDeviceOrSupply3()
    {
        return $this->nameOfCoveredDeviceOrSupply3;
    }

    /**
     * Set nameOfCoveredDeviceOrSupply4
     *
     * @param string $nameOfCoveredDeviceOrSupply4
     * @return PaymentData
     */
    public function setNameOfCoveredDeviceOrSupply4($nameOfCoveredDeviceOrSupply4)
    {
        $this->nameOfCoveredDeviceOrSupply4 = $nameOfCoveredDeviceOrSupply4;

        return $this;
    }

    /**
     * Get nameOfCoveredDeviceOrSupply4
     *
     * @return string 
     */
    public function getNameOfCoveredDeviceOrSupply4()
    {
        return $this->nameOfCoveredDeviceOrSupply4;
    }

    /**
     * Set nameOfCoveredDeviceOrSupply5
     *
     * @param string $nameOfCoveredDeviceOrSupply5
     * @return PaymentData
     */
    public function setNameOfCoveredDeviceOrSupply5($nameOfCoveredDeviceOrSupply5)
    {
        $this->nameOfCoveredDeviceOrSupply5 = $nameOfCoveredDeviceOrSupply5;

        return $this;
    }

    /**
     * Get nameOfCoveredDeviceOrSupply5
     *
     * @return string 
     */
    public function getNameOfCoveredDeviceOrSupply5()
    {
        return $this->nameOfCoveredDeviceOrSupply5;
    }

    /**
     * Set programYear
     *
     * @param integer $programYear
     * @return PaymentData
     */
    public function setProgramYear($programYear)
    {
        $this->programYear = $programYear;

        return $this;
    }

    /**
     * Get programYear
     *
     * @return integer 
     */
    public function getProgramYear()
    {
        return $this->programYear;
    }

    /**
     * Set physicianMiddleName
     *
     * @param string $physicianMiddleName
     * @return PaymentData
     */
    public function setPhysicianMiddleName($physicianMiddleName)
    {
        $this->physicianMiddleName = $physicianMiddleName;

        return $this;
    }

    /**
     * Get physicianMiddleName
     *
     * @return string 
     */
    public function getPhysicianMiddleName()
    {
        return $this->physicianMiddleName;
    }

    /**
     * Set dateOfPayment
     *
     * @param string $dateOfPayment
     * @return PaymentData
     */
    public function setDateOfPayment($dateOfPayment)
    {
        $this->dateOfPayment = $dateOfPayment;

        return $this;
    }

    /**
     * Get dateOfPayment
     *
     * @return string 
     */
    public function getDateOfPayment()
    {
        return $this->dateOfPayment;
    }

    /**
     * Set paymentPublicationDate
     *
     * @param string $paymentPublicationDate
     * @return PaymentData
     */
    public function setPaymentPublicationDate($paymentPublicationDate)
    {
        $this->paymentPublicationDate = $paymentPublicationDate;

        return $this;
    }

    /**
     * Get paymentPublicationDate
     *
     * @return string 
     */
    public function getPaymentPublicationDate()
    {
        return $this->paymentPublicationDate;
    }
}
