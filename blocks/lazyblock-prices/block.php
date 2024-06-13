<section class="prices">
        <table class="prices__table">
          <thead>
            <tr class="prices__table-head">
              <th class="prices__row"><?php echo esc_html($attributes['prices-heading'])?></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($attributes['prices-list'] as $inner) :?>
            <tr>
              <td class="prices__table-cell"><?php echo esc_html($inner['service-price'])?></td>
            </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </section>