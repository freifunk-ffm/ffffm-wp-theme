<?php
if (!isset($button_id) || !isset($prefilled_amount) || !isset($button_label)) {
    return;
}
?>

<div id="hg-stripe-donate-form-<?php echo $button_id ?>" class="hg-stripe-donate-form-user-amount">
    <p>
        Betrag:
        <input
                type="text"
                id="hg-stripe-donate-amount-<?php echo $button_id ?>"
                name="hg-ajax-donate-amount"
                value="<?php echo $prefilled_amount / 100; ?>"
                style="width:75px;"
        >&nbsp;&euro;
        <button
                id="hg-stripe-donate-button-<?php echo $button_id ?>"
                class="hg-stripe-donation-button">
            <?php echo $button_label; ?>
        </button>
    </p>
</div>
