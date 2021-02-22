<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Events\V1\Subscription;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
class SubscribedEventContext extends InstanceContext {
    /**
     * Initialize the SubscribedEventContext
     *
     * @param Version $version Version that contains the resource
     * @param string $subscriptionSid The subscription_sid
     * @param string $type The type
     */
    public function __construct(Version $version, $subscriptionSid, $type) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['subscriptionSid' => $subscriptionSid, 'type' => $type, ];

        $this->uri = '/Subscriptions/' . \rawurlencode($subscriptionSid) . '/SubscribedEvents/' . \rawurlencode($type) . '';
    }

    /**
     * Update the SubscribedEventInstance
     *
     * @param int $version The version
     * @return SubscribedEventInstance Updated SubscribedEventInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(int $version): SubscribedEventInstance {
        $data = Values::of(['Version' => $version, ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new SubscribedEventInstance(
            $this->version,
            $payload,
            $this->solution['subscriptionSid'],
            $this->solution['type']
        );
    }

    /**
     * Delete the SubscribedEventInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->version->delete('DELETE', $this->uri);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Events.V1.SubscribedEventContext ' . \implode(' ', $context) . ']';
    }
}