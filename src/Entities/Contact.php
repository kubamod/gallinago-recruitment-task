<?php


namespace kubamod\FreshsalesApiClient\Entities;


class Contact extends Entity
{
    /**
     * First name of the contact
     * @var string
     */
    public string $firstName;

    /**
     * Last name of the contact
     * @var string
     */
    public string $lastName;

    /**
     * subscription_status
     * @var array
     */
    public array $subscriptionStatus;

    /**
     * Type of subscription that the contact is in
     * @var string
     */
    public string $subscriptionTypes;

    /**
     * Designation of the contact in the account he belongs to
     * @var string
     */
    public string $jobTitle;

    /**
     * Primary email address of the contact
     * @var string
     */
    public string $email;

    /**
     * Email addresses of the contact
     * @var string
     */
    public string $emails;

    /**
     * Work phone number of the contact
     * @var string
     */
    public string $workNumber;

    /**
     * External ID of the contact
     * @var string
     */
    public string $externalId;

    /**
     * Mobile phone number of the contact
     * @var string
     */
    public string $mobileNumber;

    /**
     * Address of the contact
     * @var string
     */
    public string $address;

    /**
     * City that the contact belongs to
     * @var string
     */
    public string $city;

    /**
     * State that the contact belongs to
     * @var string
     */
    public string $state;

    /**
     * Zipcode of the region that the contact belongs to
     * @var string
     */
    public string $zipcode;

    /**
     * Country that the contact belongs to
     * @var string
     */
    public string $country;

    /**
     * Accounts which contact belongs to
     * @var array
     */
    public array $salesAccounts;

    /**
     * ID of the territory that the contact belongs to
     * @var int
     */
    public int $territoryId;

    /**
     * ID of the source where contact came from
     * @var int
     */
    public int $leadSourceId;

    /**
     * ID of the user to whom the contact has been assigned
     * @var int
     */
    public int $ownerId;

    /**
     * The medium that led your contact to your website/ web app
     * @var string
     */
    public string $medium;

    /**
     * The campaign that led your contact to your web app.
     * @var int
     */
    public int $campaignId;

    /**
     * The keywords that the contact used to reach your website/web app
     * @var string
     */
    public string $keyword;

    /**
     * Timezone that the contact belongs to
     * @var string
     */
    public string $timeZone;

    /**
     * Facebook username of the contact
     * @var string
     */
    public string $facebook;

    /**
     * Twitter username of the contact
     * @var string
     */
    public string $twitter;

    /**
     * LinkedIn account of the contact
     * @var string
     */
    public string $linkedin;

    /**
     * Contact creation timestamp
     * @var \DateTime
     */
    public \DateTime $createdAt;

    /**
     * Contact updated timestamp
     * @var \DateTime
     */
    public \DateTime $updatedAt;

    /**
     * ID of the contact status that the contact belongs to
     * @var int
     */
    public int $contactStatusId;

    /**
     * ID of the primary account that the contact belongs to
     * Usage of this key is deprecated. Use sales_accounts key to associate accounts to a contact.
     * @var int
     */
    public int $salesAccountId;

    /**
     * ID of the lifecycle stage that the contact belongs to
     * @var int
     */
    public int $lifecycleStageId;

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @param array $subscriptionStatus
     */
    public function setSubscriptionStatus(array $subscriptionStatus): void
    {
        $this->subscriptionStatus = $subscriptionStatus;
    }

    /**
     * @param string $subscriptionTypes
     */
    public function setSubscriptionTypes(string $subscriptionTypes): void
    {
        $this->subscriptionTypes = $subscriptionTypes;
    }

    /**
     * @param string $jobTitle
     */
    public function setJobTitle(string $jobTitle): void
    {
        $this->jobTitle = $jobTitle;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \Exception('Wrong email address');
        }

        $this->email = $email;
    }

    /**
     * @param string $emails
     */
    public function setEmails(string $emails): void
    {
        $this->emails = $emails;
    }

    /**
     * @param string $workNumber
     */
    public function setWorkNumber(string $workNumber): void
    {
        $this->workNumber = $workNumber;
    }

    /**
     * @param string $externalId
     */
    public function setExternalId(string $externalId): void
    {
        $this->externalId = $externalId;
    }

    /**
     * @param string $mobileNumber
     */
    public function setMobileNumber(string $mobileNumber): void
    {
        $this->mobileNumber = $mobileNumber;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * @param string $zipcode
     */
    public function setZipcode(string $zipcode): void
    {
        $this->zipcode = $zipcode;
    }

    /**
     * @param string $country
     */
    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    /**
     * @param array $salesAccounts
     */
    public function setSalesAccounts(array $salesAccounts): void
    {
        $this->salesAccounts = $salesAccounts;
    }

    /**
     * @param int $territoryId
     */
    public function setTerritoryId(int $territoryId): void
    {
        $this->territoryId = $territoryId;
    }

    /**
     * @param int $leadSourceId
     */
    public function setLeadSourceId(int $leadSourceId): void
    {
        $this->leadSourceId = $leadSourceId;
    }

    /**
     * @param int $ownerId
     */
    public function setOwnerId(int $ownerId): void
    {
        $this->ownerId = $ownerId;
    }

    /**
     * @param string $medium
     */
    public function setMedium(string $medium): void
    {
        $this->medium = $medium;
    }

    /**
     * @param int $campaignId
     */
    public function setCampaignId(int $campaignId): void
    {
        $this->campaignId = $campaignId;
    }

    /**
     * @param string $timeZone
     */
    public function setTimeZone(string $timeZone): void
    {
        $this->timeZone = $timeZone;
    }

    /**
     * @param string $facebook
     */
    public function setFacebook(string $facebook): void
    {
        $this->facebook = $facebook;
    }

    /**
     * @param string $twitter
     */
    public function setTwitter(string $twitter): void
    {
        $this->twitter = $twitter;
    }

    /**
     * @param string $linkedin
     */
    public function setLinkedin(string $linkedin): void
    {
        $this->linkedin = $linkedin;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @param int $contactStatusId
     */
    public function setContactStatusId(int $contactStatusId): void
    {
        $this->contactStatusId = $contactStatusId;
    }

    /**
     * @param int $salesAccountId
     */
    public function setSalesAccountId(int $salesAccountId): void
    {
        $this->salesAccountId = $salesAccountId;
    }

    /**
     * @param int $lifecycleStageId
     */
    public function setLifecycleStageId(int $lifecycleStageId): void
    {
        $this->lifecycleStageId = $lifecycleStageId;
    }

   /* public function ToArray(): array
    {
        $publicProperties = get_object_vars($this);

        foreach ($publicProperties as $key => $value) {
            $this->data['contact'][$this->fromCamelCase($key)] = $value;
        }

        return $this->data;
    }*/

}