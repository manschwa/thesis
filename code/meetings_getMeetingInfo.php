<?php
function getMeetingInfo(MeetingParameters $parameters)
{
    $params = array(
        'meetingID' => $parameters->getRemoteId() ?: $parameters->getMeetingId()
    );

    $response = $this->performRequest('getMeetingInfo', $params);
    $xml = new \SimpleXMLElement($response);

    if (!$xml instanceof \SimpleXMLElement) {
        return false;
    }

    return $xml;
}
