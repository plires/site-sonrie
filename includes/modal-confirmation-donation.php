<div class="modal fade" id="modalDonation" tabindex="-1" aria-labelledby="modalDonationLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalDonationLabel">Confirmación</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p v-if="parseInt(amountToDonate) && amountToDonate >= minDonation && amountToDonate != 'IMPORTE' ">Vas a donar ${{ amountToDonate }} a Fundación Sonrie la Vida. <br> Muchas gracias por tu aporte!</p>
        <p v-else>
          Por favor verificá los valores ingresados. <br>
          El valor debe ser numérico y mayor a ${{minDonation}}.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cerrar</button>

        <button 
          v-if="parseInt(amountToDonate) && amountToDonate >= minDonation && amountToDonate != 'IMPORTE'"
          @click="sendDonationToMP(amountToDonate)" 
          id="send_donation" 
          type="button" 
          class="btn btn-primary">
          CONFIRMAR
        </button>
        
      </div>
    </div>
  </div>
</div>